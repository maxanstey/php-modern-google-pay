<?php

namespace PassGeneration\VerticalTypes\Issuers;

use Google\Collection as GoogleCollection;

class IssuerListResponse extends GoogleCollection
{
    /**
     * @var string|null
     */
    protected $collection_key = 'resources';
    /**
     * @var Issuer[]|null
     */
    public array|null $resources = null;

    public function setResources(array $resources): static
    {
        $this->resources = $resources;

        return $this;
    }

    public function getResources(): array
    {
        return $this->resources;
    }
}
