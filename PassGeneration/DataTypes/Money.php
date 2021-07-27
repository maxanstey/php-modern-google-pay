<?php

namespace PassGeneration\DataTypes;

use Google\Model as GoogleModel;

class Money extends GoogleModel
{
    public string|null $currencyCode = null;
    public string|null $kind = null;
    public int|null $micros = null;

    public function setCurrencyCode(string $currencyCode): static
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
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

    public function setMicros(int $micros): static
    {
        $this->micros = $micros;

        return $this;
    }

    public function getMicros(): int
    {
        return $this->micros;
    }
}

