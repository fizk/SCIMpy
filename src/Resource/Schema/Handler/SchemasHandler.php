<?php

namespace App\Resource\Schema\Handler;

use App\Handler\VerbHandlerTrait;
use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\RequestHandlerInterface;

class SchemasHandler implements RequestHandlerInterface
{
    use VerbHandlerTrait;
    
    public function get(ServerRequestInterface $request): ResponseInterface
    {
        return new JsonResponse([]);
    }
}