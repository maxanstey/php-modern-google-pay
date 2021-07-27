<?php

namespace PassGeneration\VerticalTypes\Offers;

use PassGeneration\DataTypes\Pagination as GooglePagination;
use Google\Collection as GoogleCollection;

class OfferClassListResponse extends GoogleCollection
{
    /**
     * @var string|null
     */
    protected $collection_key = 'resources';
    /**
     * @var array|GooglePagination|null
     */
    public array|GooglePagination|null $pagination = null;
    /**
     * @var OfferClass[]|null
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
