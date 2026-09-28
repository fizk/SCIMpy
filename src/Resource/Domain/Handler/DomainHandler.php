<?php

namespace App\Resource\Domain\Handler;

use App\Handler\VerbHandlerTrait;
use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\RequestHandlerInterface;

class DomainHandler implements RequestHandlerInterface
{
    use VerbHandlerTrait;
    
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        return new JsonResponse([]);
    }
}