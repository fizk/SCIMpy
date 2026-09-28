<?php

namespace App\Resource\Domain\Handler;

use App\Handler\VerbHandlerTrait;
use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\RequestHandlerInterface;

class DomainsHandler implements RequestHandlerInterface
{
    use VerbHandlerTrait;
    
    public function get(ServerRequestInterface $request): ResponseInterface
    {
        return new JsonResponse([]);
    }
    
    public function post(ServerRequestInterface $request): ResponseInterface
    {
        return new JsonResponse([]);
    }
}