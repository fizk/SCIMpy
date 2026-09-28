<?php

namespace Scimpy\ServiceProviderConfig\Service;

class ResourceTypesService implements ResourceTypesServiceInterface
{
    /** @var string[] */
    private array $resourceTypes = [];
    private int $position = 0;

    public function __construct(array $resourceTypes = []) {
        $this->resourceTypes = array_map(
            fn ($i) => strtolower($i), 
            $resourceTypes
        );
        $this->position = 0;
    }

    public function current(): mixed
    {
        return $this->resourceTypes[$this->position];
    }

    public function key(): mixed
    {
        return $this->position;
    }

    public function next(): void
    {
        $this->position++;
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

    public function valid(): bool
    {
        return isset($this->books[$this->position]);
    }

    public function isSupported(string $resourceType): bool
    {
        return in_array(
            strtolower($resourceType),
            $this->resourceTypes

        );
    }

    public function add(string $resourceType): static
    {
        $this->resourceTypes[] = strtolower($resourceType);
        return $this;
    }

    public function remove(string $resourceType): static
    {
        $this->resourceTypes = array_diff(
            $this->resourceTypes, 
            [strtolower($resourceType)]
        );
        return $this;
    }
}