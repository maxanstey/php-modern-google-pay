<?php

namespace PassGeneration\DataTypes\Fields;

use Google\Collection as GoogleCollection;

class FieldSelector extends GoogleCollection
{
    /**
     * @var string|null
     */
    protected $collection_key = 'fields';
    /**
     * @var FieldReference|null
     */
    public FieldReference|null $fields = null;

    public function setFields(FieldReference $fields): static
    {
        $this->fields = $fields;

        return $this;
    }

    public function getFields(): FieldReference
    {
        return $this->fields;
    }
}
