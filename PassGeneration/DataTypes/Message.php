<?php

namespace PassGeneration\DataTypes;

use Google\Model as GoogleModel;
use PassGeneration\DataTypes\TimeInterval;
use PassGeneration\DataTypes\LocalizedString;

class Message extends GoogleModel
{
    public string|null $body = null;
    public string|null $header = null;
    public string|null $id = null;
    public string|null $kind = null;
    public string|null $messageType = null;
    public LocalizedString|null $localizedHeader = null;
    public LocalizedString|null $localizedBody = null;
    public TimeInterval|null $displayInterval = null;

    public function setBody(string $body): static
    {
        $this->body = $body;

        return $this;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function setDisplayInterval(TimeInterval $displayInterval): static
    {
        $this->displayInterval = $displayInterval;

        return $this;
    }

    public function getDisplayInterval(): TimeInterval
    {
        return $this->displayInterval;
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

    public function setKind(string $kind): static
    {
        $this->kind = $kind;

        return $this;
    }

    public function getKind(): string
    {
        return $this->kind;
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

    public function setMessageType(string $messageType): static
    {
        $this->messageType = $messageType;

        return $this;
    }

    public function getMessageType(): string
    {
        return $this->messageType;
    }
}
