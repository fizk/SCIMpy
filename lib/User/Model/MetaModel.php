<?php

namespace Scimpy\User\Model;

use DateTimeImmutable;
use JsonSerializable;

class MetaModel implements JsonSerializable
{
    private string $resourceType = 'User';
    private DateTimeImmutable $created;
    private DateTimeImmutable $lastModified;
    private string $version;

    // location is determined when converting to JSON
    // /** @var string $location */
    // private $location;

    public function jsonSerialize(): mixed
    {
        return [
            "resourceType" => $this->resourceType,
            "created" => $this->created->format('c'),
            "lastModified" => $this->lastModified->format('c'),
            "location" => "https://example.com",
            "version" => "W/\"v1\""
        ];
    }

    public function getResourceType(): string
    {
        return $this->resourceType;
    }

    public function setResourceType(string $resourceType): self
    {
        $this->resourceType = $resourceType;

        return $this;
    }

    public function getCreated(): DateTimeImmutable
    {
        return $this->created;
    }

    public function setCreated(DateTimeImmutable $created): self
    {
        $this->created = $created;

        return $this;
    }

    public function getLastModified(): DateTimeImmutable
    {
        return $this->lastModified;
    }

    public function setLastModified(DateTimeImmutable $lastModified): self
    {
        $this->lastModified = $lastModified;

        return $this;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function setVersion(string $version): self
    {
        $this->version = $version;

        return $this;
    }

    // /**
    //  * Get the value of location
    //  */
    // public function getLocation()
    // {
    //     return $this->location;
    // }

    // /**
    //  * Set the value of location
    //  */
    // public function setLocation($location): self
    // {
    //     $this->location = $location;

    //     return $this;
    // }
}