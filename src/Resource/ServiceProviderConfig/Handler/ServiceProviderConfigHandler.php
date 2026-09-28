<?php

namespace App\Resource\ServiceProviderConfig\Handler;

use App\Handler\VerbHandlerTrait;
use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\RequestHandlerInterface;

class ServiceProviderConfigHandler implements RequestHandlerInterface
{
    use VerbHandlerTrait;
    
    public function get(ServerRequestInterface $request): ResponseInterface
    {
        return new JsonResponse([]);
    }
}