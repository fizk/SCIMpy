<?php

namespace Scimpy\User\Service;

use Scimpy\Event\EventDispatcherAwareInterface;
use Scimpy\Event\EventDispatcherAwareTrait;
use Scimpy\User\{
    Event\UserCreateEvent,
    Event\UserDeleteEvent,
    Event\UserReadEvent,
    Event\UserUpdateEvent,
    Repository\UserRepositoryInterface,
};
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class UserService implements EventDispatcherAwareInterface
{
    use EventDispatcherAwareTrait;

    private UserRepositoryInterface $userRepository;

    public function getAll(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $this->getEventDispatcher()->dispatch(new UserReadEvent());

        $users = $this->getRepository()->getAll();
        $count = $this->getRepository()->getAllCount();

        $response->getBody()->write(json_encode([
            "schemas"=> ["urn:ietf:params:scim:api:messages:2.0:ListResponse"],
            "totalResults" => $count,
            "startIndex" => 1,
            "itemsPerPage" => 1,
            "Resources" => $users
        ]));

        return $response = $response
            ->withStatus(200)
            ->withHeader('Content-Type', 'application/scim+json');
    }

    public function getOneById(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $this->getEventDispatcher()->dispatch(new UserReadEvent());
        $user = $this->getRepository()->getOneById(
            $request->getAttribute('id')
        );

        if ($user) {
            $response->getBody()->write(json_encode($user));
            $response = $response
                ->withStatus(200)
                ->withHeader('Content-Type', 'application/scim+json');
        } else {
            $response->getBody()->write(json_encode([
                "schemas" => ["urn:ietf:params:scim:api:messages:2.0:Error"],
                "status" => "404",
                "scimType" => "notFound",
                "detail" => "User not found"
            ]));
            $response = $response
                ->withStatus(404)
                ->withHeader('Content-Type', 'application/scim+json');
        }

        return $response;
    }

    public function create(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $this->getEventDispatcher()->dispatch(new UserCreateEvent());
        return $response;
    }

    public function update(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $this->getEventDispatcher()->dispatch(new UserUpdateEvent());
        return $response;
    }

    public function delete(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $this->getEventDispatcher()->dispatch(new UserDeleteEvent());

        $result = $this->getRepository()->delete($request->getAttribute('id'));
        if ($result) {
            $response = $response
                ->withStatus(200)
                ->withHeader('Content-Type', 'application/scim+json');
        } else {
            $response = $response
                ->withStatus(404)
                ->withHeader('Content-Type', 'application/scim+json');
        }

        return $response;
    }

    public function setRepository(UserRepositoryInterface $repository): static
    {
        $this->userRepository = $repository;
        return $this;
    }

    public function getRepository(): UserRepositoryInterface
    {
        return $this->userRepository;
    }
}