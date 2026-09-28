<?php

namespace Scimpy\User\Model;

use JsonSerializable;

class UserModel implements JsonSerializable
{
    private array $schemas = ["urn:ietf:params:scim:schemas:core:2.0:User"];
    private mixed $id;
    private mixed $externalId;
    private MetaModel $meta;
    private NameModel $name;
    /** @var string[] */
    /** @var AddressModel[] */
    private array $addresses;
    /** @var EmailModel[] */
    private array $emails;
    /** @var PhoneNumberModel[] */
    private array $phoneNumbers;
    private ?string $userName = null;
    private ?string $displayName = null;
    private ?string $nickName = null;
    private ?string $profileUrl = null;
    private ?string $userType = null;
    private ?string $title = null;
    private ?string $department = null;
    private bool $active = true;

    public function jsonSerialize(): mixed
    {
        return [
            "schemas" => $this->schemas,
            'meta' => $this->meta,
            'id' => $this->id,
            'externalId' => $this->externalId,
            'userName' => $this->userName,
            'displayName' => $this->displayName,
            'nickName' => $this->nickName,
            'name' => $this->name,
            'profileUrl' => $this->profileUrl,
            'userType' => $this->userType,
            'title' => $this->title,
            'department' => $this->department,
            'addresses' => $this->addresses,
            'emails' => $this->emails,
            'phoneNumbers' => $this->phoneNumbers,
            'active' => $this->active,
        ];
    }

    public function getId(): mixed
    {
        return $this->id;
    }

    public function setId(mixed $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getExternalId(): mixed
    {
        return $this->externalId;
    }

    public function setExternalId(mixed $externalId): static
    {
        $this->externalId = $externalId;

        return $this;
    }

    public function getName(): NameModel
    {
        return $this->name;
    }

    public function setName(NameModel $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getSchemas(): array
    {
        return $this->schemas;
    }

    public function setSchemas(array $schemas): self
    {
        $this->schemas = $schemas;

        return $this;
    }

    public function getMeta(): MetaModel
    {
        return $this->meta;
    }

    public function setMeta(MetaModel $meta): self
    {
        $this->meta = $meta;

        return $this;
    }

    public function getAddresses(): array
    {
        return $this->addresses;
    }

    public function setAddresses(array $addresses): self
    {
        $this->addresses = $addresses;

        return $this;
    }

    public function getEmails(): array
    {
        return $this->emails;
    }

    public function setEmails(array $emails): self
    {
        $this->emails = $emails;

        return $this;
    }

    public function getPhoneNumbers(): array
    {
        return $this->phoneNumbers;
    }

    public function setPhoneNumbers(array $phoneNumbers): self
    {
        $this->phoneNumbers = $phoneNumbers;

        return $this;
    }

    public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function setUserName(?string $userName): self
    {
        $this->userName = $userName;

        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;

        return $this;
    }

    public function getNickName(): ?string
    {
        return $this->nickName;
    }

    public function setNickName(?string $nickName): self
    {
        $this->nickName = $nickName;

        return $this;
    }

    public function getProfileUrl(): ?string
    {
        return $this->profileUrl;
    }

    public function setProfileUrl(?string $profileUrl): self
    {
        $this->profileUrl = $profileUrl;

        return $this;
    }

    public function getUserType(): ?string
    {
        return $this->userType;
    }

    public function setUserType(?string $userType): self
    {
        $this->userType = $userType;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDepartment(): ?string
    {
        return $this->department;
    }

    public function setDepartment(?string $department): self
    {
        $this->department = $department;

        return $this;
    }

    public function isActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }
}