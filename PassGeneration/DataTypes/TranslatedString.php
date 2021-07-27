<?php

namespace PassGeneration\DataTypes;

use Google\Model as GoogleModel;

class TranslatedString extends GoogleModel
{
    public string|null $kind = null;
    public string|null $language = null;
    public string|null $value = null;

    public function setKind(string $kind): static
    {
        $this->kind = $kind;

        return $this;
    }

    public function getKind(): string
    {
        return $this->kind;
    }

    public function setLanguage(string $language): static
    {
        $this->language = $language;

        return $this;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function setValue(string $value): static
    {
        $this->value = $value;

        return $this;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
