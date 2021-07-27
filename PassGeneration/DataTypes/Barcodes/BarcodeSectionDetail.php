<?php

namespace PassGeneration\DataTypes\Barcodes;

use Google\Model as GoogleModel;
use PassGeneration\DataTypes\Fields\FieldSelector;

class BarcodeSectionDetail extends GoogleModel
{
    public FieldSelector|null $fieldSelector = null;

    public function setFieldSelector(FieldSelector $fieldSelector): static
    {
        $this->fieldSelector = $fieldSelector;

        return $this;
    }

    public function getFieldSelector(): FieldSelector
    {
        return $this->fieldSelector;
    }
}
