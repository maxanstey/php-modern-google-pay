<?php

namespace PassGeneration\DataTypes;

use Google\Collection as GoogleCollection;
use PassGeneration\DataTypes\Uri;

class LinksModuleData extends GoogleCollection
{
    /**
     * @var string|null
     */
    protected $collection_key = 'uris';
    /**
     * @var Uri[]|null
     */
    public array|null $uris = null;

    public function setUris(array $uris): static
    {
        $this->uris = $uris;

        return $this;
    }

    public function getUris(): array
    {
        return $this->uris;
    }
}
