<?php

namespace PassGeneration\DataTypes;

use Google\Model as GoogleModel;
use PassGeneration\DataTypes\LocalizedString;

class Uri extends GoogleModel
{
    public string|null $description = null;
    public string|null $id = null;
    public string|null $kind = null;
    public string|null $uri = null;
    public LocalizedString|null $localizedDescription = null;

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setId(string $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setKind(string $kind): static
    {
        $this->kind = $kind;

        return $this;
    }

    public function getKind(): string
    {
        return $this->kind;
    }

    public function setLocalizedDescription(LocalizedString $localizedDescription): static
    {
        $this->localizedDescription = $localizedDescription;

        return $this;
    }

    public function getLocalizedDescription(): LocalizedString
    {
        return $this->localizedDescription;
    }

    public function setUri(string $uri): static
    {
        $this->uri = $uri;

        return $this;
    }

    public function getUri(): string
    {
        return $this->uri;
    }
}
