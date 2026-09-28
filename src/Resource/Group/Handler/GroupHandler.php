<?php

namespace App\Resource\Group\Handler;

use App\Handler\VerbHandlerTrait;
use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\RequestHandlerInterface;

class GroupHandler implements RequestHandlerInterface
{
    use VerbHandlerTrait;
    
    public function get(ServerRequestInterface $request): ResponseInterface
    {
        return new JsonResponse([]);
    }
    
    public function put(ServerRequestInterface $request): ResponseInterface
    {
        return new JsonResponse([]);
    }
    
    public function delete(ServerRequestInterface $request): ResponseInterface
    {
        return new JsonResponse([]);
    }
}