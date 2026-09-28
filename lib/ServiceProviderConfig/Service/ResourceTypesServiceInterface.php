<?php

namespace Scimpy\ServiceProviderConfig\Service;

use Iterator;

interface ResourceTypesServiceInterface extends Iterator
{
    public function add(string $resourceType): static;

    public function remove(string $resourceType): static;
    
    public function isSupported(string $resourceType): bool;
}