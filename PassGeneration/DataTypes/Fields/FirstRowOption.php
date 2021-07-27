<?php

namespace PassGeneration\DataTypes\Fields;

use Google\Model as GoogleModel;

class FirstRowOption extends GoogleModel
{
    public FieldSelector|null $fieldOption = null;
    public string|null $transitOption = null;

    public function setFieldOption(FieldSelector $fieldOption): static
    {
        $this->fieldOption = $fieldOption;

        return $this;
    }

    public function getFieldOption(): FieldSelector
    {
        return $this->fieldOption;
    }

    public function setTransitOption(string $transitOption): static
    {
        $this->transitOption = $transitOption;

        return $this;
    }

    public function getTransitOption(): string
    {
        return $this->transitOption;
    }
}
