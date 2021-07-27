<?php

namespace PassGeneration\DataTypes;

use Google\Model as GoogleModel;

class AuthenticationKey extends GoogleModel
{
    public string|null $id = null;
    public string|null $publicKeyPem = null;

    public function setId(string $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setPublicKeyPem(string $publicKeyPem): static
    {
        $this->publicKeyPem = $publicKeyPem;

        return $this;
    }

    public function getPublicKeyPem(): string
    {
        return $this->publicKeyPem;
    }
}
