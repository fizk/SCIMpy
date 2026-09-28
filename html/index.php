<?php
namespace App;

chdir(dirname(__DIR__));
include __DIR__ . '/../vendor/autoload.php';

use Api\Event\ServerRequestFailureEvent;
use Api\Event\ServerRequestSuccessEvent;
use ErrorException;
use Laminas\Diactoros\Response\EmptyResponse;
use Laminas\Diactoros\ServerRequestFactory;
use Laminas\HttpHandlerRunner\Emitter\SapiEmitter;
use Api\Http\Response\DuplicateKeyErrorResponse;
use Lib\SQL\DuplicateKeyException;
use Library\Container\Container;
use Library\Http\Response\ServerErrorResponse;
use Library\Http\ServerFilter\ContentTypeFilter;
use Library\Router\Router;
use Psr\EventDispatcher\EventDispatcherInterface;

set_error_handler(function ($severity, $message, $file, $line)
{
    if (!(error_reporting() & $severity)) {
        return;
    }
    throw new ErrorException($message, 0, $severity, $file, $line);
});

$emitter = new SapiEmitter();
// try {
    $serviceManager = new Container( require './src/service.php');
    $router = new Router(require './src/router.php');

    $request = ServerRequestFactory::fromGlobals(
        $_SERVER,
        $_GET,
        $_POST,
        $_COOKIE,
        $_FILES,
        new ContentTypeFilter(ContentTypeFilter::ARRAY),
    );

    $routeMatch = $router->match($request);
    if (!$routeMatch) {
        $emitter->emit(new EmptyResponse(406));
        exit;
    }
    $attributes = $routeMatch->getAttributes();
    foreach($attributes as $key => $value) {
        $request = $request->withAttribute($key, $value);
    }

    // /** @var EventDispatcherInterface */
    // $eventManager = $serviceManager->get(EventDispatcherInterface::class);

    $controllerName = $routeMatch->getValue();

    if (is_array($controllerName) && count($controllerName) === 2) {
        /** @var \Psr\Http\Server\MiddlewareInterface */
        $middleware = $serviceManager->get($controllerName[0]);
        /** @var \Psr\Http\Server\RequestHandlerInterface */
        $controller = $serviceManager->get($controllerName[1]);
        $response = $middleware->process($request, $controller);
        // $eventManager->dispatch(new ServerRequestSuccessEvent($request, $response));
        $emitter->emit($response);
    } else if(is_array($controllerName) && count($controllerName) === 1) {
        /** @var \Psr\Http\Server\RequestHandlerInterface */
        $controller = $serviceManager->get($controllerName[0]);
        $response = $controller->handle($request);
        // $eventManager->dispatch(new ServerRequestSuccessEvent($request, $response));
        $emitter->emit($response);
    } else {
        /** @var \Psr\Http\Server\RequestHandlerInterface */
        $controller = $serviceManager->get($controllerName);
        $response = $controller->handle($request);
        // $eventManager->dispatch(new ServerRequestSuccessEvent($request, $response));
        $emitter->emit($response);
    }
// }
// catch(DuplicateKeyException $exception) {
//     $response = new DuplicateKeyErrorResponse($exception);
//     /** @var EventDispatcherInterface */
//     // $eventManager = $serviceManager->get(EventDispatcherInterface::class);
//     // $eventManager->dispatch(new ServerRequestFailureEvent($request, $throwable));
//     $emitter->emit($response);
//     exit;
// }
// catch (\Throwable $throwable) {
//     $response = new ServerErrorResponse($throwable);
//     /** @var EventDispatcherInterface */
//     $eventManager = $serviceManager->get(EventDispatcherInterface::class);
//     $eventManager->dispatch(new ServerRequestFailureEvent($request, $throwable));
//     $emitter->emit($response);
//     exit;
// }
