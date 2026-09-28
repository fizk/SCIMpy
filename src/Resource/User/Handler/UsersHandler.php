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

class UsersHandler implements RequestHandlerInterface, UserServiceAwareInterface
{
    use UserServiceAwareTrait;
    use VerbHandlerTrait;
    
    public function get(ServerRequestInterface $request): ResponseInterface
    {
        return $this->getUserService()->getAll(
            $request, 
            new Response()
        );
    }

    public function post(ServerRequestInterface $request): ResponseInterface
    {
        return $this->getUserService()->getOneById(
            $request, 
            new Response()
        );
    }
}