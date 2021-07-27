<?php

namespace PassGeneration\VerticalTypes\Flights;

use Google\Model as GoogleModel;

class FlightObjectAddMessageResponse extends GoogleModel
{
    public FlightObject|null $resource = null;

    public function setResource(FlightObject $resource): static
    {
        $this->resource = $resource;

        return $this;
    }

    public function getResource(): FlightObject
    {
        return $this->resource;
    }
}
