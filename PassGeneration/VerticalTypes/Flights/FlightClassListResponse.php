<?php

namespace PassGeneration\VerticalTypes\Flights;

use PassGeneration\DataTypes\Pagination as GooglePagination;
use Google\Collection as GoogleCollection;

class FlightClassListResponse extends GoogleCollection
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
     * @var FlightClass|null
     */
    public FlightClass|null $resources = null;

    public function setPagination(GooglePagination $pagination): static
    {
        $this->pagination = $pagination;

        return $this;
    }

    public function getPagination(): GooglePagination
    {
        return $this->pagination;
    }

    public function setResources($resources): static
    {
        $this->resources = $resources;

        return $this;
    }

    public function getResources(): FlightClass
    {
        return $this->resources;
    }
}
