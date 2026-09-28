<?php

namespace Scimpy\User\Service;

trait UserServiceAwareTrait
{
    private UserService $userServiceInterface;

    public function setUserService(UserService $userService): static
    {
        $this->userServiceInterface = $userService;
        return $this;
    }

    public function getUserService(): UserService
    {
        return $this->userServiceInterface;
    }
}