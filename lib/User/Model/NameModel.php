<?php

namespace Scimpy\User\Model;

use JsonSerializable;

class NameModel implements JsonSerializable
{
    private ?string $formatted = null;
    private ?string $familyName = null;
    private ?string $givenName = null;
    private ?string $middleName = null;
    private ?string $honorificPrefix = null;
    private ?string $honorificSuffix = null;

    public function jsonSerialize(): mixed
    {
        return [
            "formatted" => $this->formatted,
            "familyName" => $this->familyName,
            "givenName" => $this->givenName,
            "middleName" => $this->middleName,
            "honorificPrefix" => $this->honorificPrefix,
            "honorificSuffix" => $this->honorificSuffix
        ];
    }

    public function getFormatted(): ?string
    {
        return $this->formatted;
    }

    public function setFormatted(?string $formatted): self
    {
        $this->formatted = $formatted;

        return $this;
    }

    public function getFamilyName(): ?string
    {
        return $this->familyName;
    }

    public function setFamilyName(?string $familyName): self
    {
        $this->familyName = $familyName;

        return $this;
    }

    public function getGivenName(): ?string
    {
        return $this->givenName;
    }

    public function setGivenName(?string $givenName): self
    {
        $this->givenName = $givenName;

        return $this;
    }

    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }

    public function setMiddleName(?string $middleName): self
    {
        $this->middleName = $middleName;

        return $this;
    }

    public function getHonorificPrefix(): ?string
    {
        return $this->honorificPrefix;
    }

    public function setHonorificPrefix(?string $honorificPrefix): self
    {
        $this->honorificPrefix = $honorificPrefix;

        return $this;
    }

    public function getHonorificSuffix(): ?string
    {
        return $this->honorificSuffix;
    }

    public function setHonorificSuffix(?string $honorificSuffix): self
    {
        $this->honorificSuffix = $honorificSuffix;

        return $this;
    }
}