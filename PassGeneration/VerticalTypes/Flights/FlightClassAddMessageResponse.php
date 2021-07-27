<?php

namespace PassGeneration\VerticalTypes\Flights;

use Google\Model as GoogleModel;

class FlightClassAddMessageResponse extends GoogleModel
{
    public FlightClass|null $resource = null;

    public function setResource(FlightClass $resource): static
    {
        $this->resource = $resource;

        return $this;
    }

    public function getResource(): FlightClass
    {
        return $this->resource;
    }
}
