<?php

namespace Scimpy\User\Repository;

use Scimpy\User\Model\UserModel;

interface UserRepositoryInterface
{
    /** @return UserModel[] */
    public function getAll(): array;
    
    public function getAllCount(): int;

    public function getOneById(mixed $id): ?UserModel;

    public function create(UserModel $user): ?UserModel;

    public function update(mixed  $id, UserModel $user): ?UserModel;
    
    public function delete(mixed $id): bool;  
}