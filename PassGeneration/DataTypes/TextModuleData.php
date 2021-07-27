<?php

namespace PassGeneration\DataTypes;

use Google\Model as GoogleModel;
use PassGeneration\DataTypes\LocalizedString;

class TextModuleData extends GoogleModel
{
    public string|null $body = null;
    public string|null $header = null;
    public string|null $id = null;
    public LocalizedString|null $localizedBody = null;
    public LocalizedString|null $localizedHeader = null;

    public function setBody(string $body): static
    {
        $this->body = $body;

        return $this;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function setHeader(string $header): static
    {
        $this->header = $header;

        return $this;
    }

    public function getHeader(): string
    {
        return $this->header;
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

    public function setLocalizedBody(LocalizedString $localizedBody): static
    {
        $this->localizedBody = $localizedBody;

        return $this;
    }

    public function getLocalizedBody(): LocalizedString
    {
        return $this->localizedBody;
    }

    public function setLocalizedHeader(LocalizedString $localizedHeader): static
    {
        $this->localizedHeader = $localizedHeader;

        return $this;
    }

    public function getLocalizedHeader(): LocalizedString
    {
        return $this->localizedHeader;
    }
}
