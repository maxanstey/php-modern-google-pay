<?php

namespace PassGeneration\VerticalTypes\Transit;

use PassGeneration\DataTypes\Pagination as GooglePagination;
use Google\Collection as GoogleCollection;

class TransitObjectListResponse extends GoogleCollection
{
    /**
     * @var string|null
     */
    protected $collection_key = 'resources';
    /**
     * @var GooglePagination|null
     */
    public GooglePagination|null $pagination = null;
    /**
     * @var TransitObject[]|null
     */
    public array|null $resources = null;

    public function setPagination(GooglePagination $pagination): static
    {
        $this->pagination = $pagination;

        return $this;
    }

    public function getPagination(): GooglePagination
    {
        return $this->pagination;
    }

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
