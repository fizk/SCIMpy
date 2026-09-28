<?php

namespace App\Handler;

use Laminas\Diactoros\Response\EmptyResponse;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\RequestHandlerInterface;

class UnsupportedResourceTypeHandler implements RequestHandlerInterface
{
    use VerbHandlerTrait;
    
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        return new EmptyResponse(406);
    }
}