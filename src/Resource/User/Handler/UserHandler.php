<?php

namespace App\Resource\User\Handler;

use Scimpy\User\{
    Service\UserServiceAwareInterface,
    Service\UserServiceAwareTrait
};
use App\Handler\VerbHandlerTrait;
use Laminas\Diactoros\Response;
use Psr\Http\{
    Message\ServerRequestInterface,
    Message\ResponseInterface,
    Server\RequestHandlerInterface
};

class UserHandler implements RequestHandlerInterface, UserServiceAwareInterface
{
    use UserServiceAwareTrait;
    use VerbHandlerTrait;
    
    public function get(ServerRequestInterface $request): ResponseInterface
    {
        return $this->getUserService()->getOneById(
            $request, 
            new Response()
        );
    }

    public function put(ServerRequestInterface $request): ResponseInterface
    {
        return $this->getUserService()->update(
            $request,
            new Response()
        );
    }

    public function delete(ServerRequestInterface $request): ResponseInterface
    {
        return $this->getUserService()->delete(
            $request,
            new Response()
        );
    }
}