<?php

namespace PassGeneration\DataTypes\Labels;

use Google\Collection as GoogleCollection;

class LabelValueRow extends GoogleCollection
{
    /**
     * @var string|null
     */
    protected $collection_key = 'columns';
    /**
     * @var LabelValue[]|null
     */
    public array|null $columns = null;

    public function setColumns(array $columns): static
    {
        $this->columns = $columns;

        return $this;
    }

    public function getColumns(): array
    {
        return $this->columns;
    }
}
