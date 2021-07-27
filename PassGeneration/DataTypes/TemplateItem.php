<?php

namespace PassGeneration\DataTypes;

use PassGeneration\DataTypes\Fields\FieldSelector;
use Google\Model as GoogleModel;

class TemplateItem extends GoogleModel
{
    public string|null $predefinedItem = null;
    public FieldSelector|null $firstValue = null;
    public FieldSelector|null $secondValue = null;

    public function setFirstValue(FieldSelector $firstValue): static
    {
        $this->firstValue = $firstValue;

        return $this;
    }

    public function getFirstValue(): FieldSelector
    {
        return $this->firstValue;
    }

    public function setPredefinedItem(string $predefinedItem): static
    {
        $this->predefinedItem = $predefinedItem;

        return $this;
    }

    public function getPredefinedItem(): string
    {
        return $this->predefinedItem;
    }

    public function setSecondValue(FieldSelector $secondValue): static
    {
        $this->secondValue = $secondValue;

        return $this;
    }

    public function getSecondValue(): FieldSelector
    {
        return $this->secondValue;
    }
}
