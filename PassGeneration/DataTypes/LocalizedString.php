<?php

namespace PassGeneration\DataTypes;

use Google\Collection as GoogleCollection;
use PassGeneration\DataTypes\TranslatedString;

class LocalizedString extends GoogleCollection
{
    /**
     * @var string|null
     */
    protected $collection_key = 'translatedValues';
    /**
     * @var string|null
     */
    public string|null $kind = null;
    /**
     * @var TranslatedString|null
     */
    public TranslatedString|null $defaultValue = null;
    /**
     * @var TranslatedString[]|null
     */
    public array|null $translatedValues = null;

    public function setDefaultValue(TranslatedString $defaultValue): static
    {
        $this->defaultValue = $defaultValue;

        return $this;
    }

    public function getDefaultValue(): TranslatedString
    {
        return $this->defaultValue;
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

    public function setTranslatedValues(array $translatedValues): static
    {
        $this->translatedValues = $translatedValues;

        return $this;
    }

    public function getTranslatedValues(): array
    {
        return $this->translatedValues;
    }
}
