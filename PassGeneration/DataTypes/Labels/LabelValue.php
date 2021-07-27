<?php

namespace PassGeneration\DataTypes\Labels;

use Google\Model as GoogleModel;
use PassGeneration\DataTypes\LocalizedString;

class LabelValue extends GoogleModel
{
    public string|null $label = null;
    public string|null $value = null;
    public LocalizedString|null $localizedLabel = null;
    public LocalizedString|null $localizedValue = null;

    public function setLabel($label): static
    {
        $this->label = $label;

        return $this;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLocalizedLabel(LocalizedString $localizedLabel): static
    {
        $this->localizedLabel = $localizedLabel;

        return $this;
    }

    public function getLocalizedLabel(): LocalizedString
    {
        return $this->localizedLabel;
    }

    public function setLocalizedValue(LocalizedString $localizedValue): static
    {
        $this->localizedValue = $localizedValue;

        return $this;
    }

    public function getLocalizedValue(): LocalizedString
    {
        return $this->localizedValue;
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

