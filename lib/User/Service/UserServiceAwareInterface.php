<?php

namespace Scimpy\User\Service;

interface UserServiceAwareInterface
{
    public function setUserService(UserService $userService): static;
    
    public function getUserService(): UserService;
}