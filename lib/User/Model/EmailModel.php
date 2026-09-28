<?php

namespace Scimpy\User\Model;

use JsonSerializable;

class EmailModel implements JsonSerializable
{
    private string $value;
    private ?string $type = null;
    private bool $primary = false;

    public function jsonSerialize(): mixed
    {
        return [
            'value' => $this->value,
            'type' => $this->type,
            'primary' => $this->primary
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

    public function isPrimary(): bool
    {
        return $this->primary;
    }

    public function setPrimary(bool $primary): self
    {
        $this->primary = $primary;

        return $this;
    }
}