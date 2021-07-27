<?php

namespace PassGeneration\DataTypes\Fields;

use Google\Model as GoogleModel;

class FieldReference extends GoogleModel
{
    public string|null $dateFormat = null;
    public string|null $fieldPath = null;

    public function setDateFormat(string $dateFormat): static
    {
        $this->dateFormat = $dateFormat;

        return $this;
    }

    public function getDateFormat(): string
    {
        return $this->dateFormat;
    }

    public function setFieldPath(string $fieldPath): static
    {
        $this->fieldPath = $fieldPath;

        return $this;
    }

    public function getFieldPath(): string
    {
        return $this->fieldPath;
    }
}
