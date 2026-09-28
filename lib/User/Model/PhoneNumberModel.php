<?php

namespace Scimpy\User\Model;

use JsonSerializable;

class PhoneNumberModel implements JsonSerializable
{
    private string $value;
    private ?string $type = null;
    
    public function jsonSerialize(): mixed
    {
        return [
            "value" => $this->value,
            "type" => $this->type
        ];
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

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