<?php

namespace PassGeneration\Overrides;

use PassGeneration\DataTypes\DetailsItemInfo;
use Google\Collection as GoogleCollection;

class DetailsTemplateOverride extends GoogleCollection
{
    /**
     * @var string|null
     */
    protected $collection_key = 'detailsItemInfos';
    /**
     * @var DetailsItemInfo[]|null
     */
    public array|null $detailsItemInfos = null;

    public function setDetailsItemInfos(array $detailsItemInfos): static
    {
        $this->detailsItemInfos = $detailsItemInfos;

        return $this;
    }

    public function getDetailsItemInfos(): array
    {
        return $this->detailsItemInfos;
    }
}
