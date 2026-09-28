<?php

namespace Scimpy\User\Model;

use JsonSerializable;

class AddressModel implements JsonSerializable
{
    private ?string $formatted = null;
    private ?string $streetAddress = null;
    private ?string $locality = null;
    private ?string $region = null;
    private ?string $postalCode = null;
    private ?string $country = null;
    private ?string $type = null;

    public function jsonSerialize(): mixed
    {
        return [
            "formatted" => $this->formatted,
            "streetAddress" => $this->streetAddress,
            "locality" => $this->locality,
            "region" => $this->region,
            "postalCode" => $this->postalCode,
            "country" => $this->country,
            "type" => $this->type
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

    public function getStreetAddress(): ?string
    {
        return $this->streetAddress;
    }

    public function setStreetAddress(?string $streetAddress): self
    {
        $this->streetAddress = $streetAddress;

        return $this;
    }

    public function getLocality(): ?string
    {
        return $this->locality;
    }

    public function setLocality(?string $locality): self
    {
        $this->locality = $locality;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(?string $region): self
    {
        $this->region = $region;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(?string $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }
}