<?php

namespace PassGeneration\DataTypes;

use Google\Collection as GoogleCollection;

class InfoModuleData extends GoogleCollection
{
    /**
     * @var string|null
     */
    protected $collection_key = 'labelValueRows';
    /**
     * @var array|null
     */
    public array|null $labelValueRows = null;

    public function setLabelValueRows(array $labelValueRows): static
    {
        $this->labelValueRows = $labelValueRows;

        return $this;
    }

    public function getLabelValueRows(): array
    {
        return $this->labelValueRows;
    }
}
