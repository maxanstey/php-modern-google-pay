<?php

namespace PassGeneration\VerticalTypes\Transit;

use Google\Model as GoogleModel;

class TransitObjectAddMessageResponse extends GoogleModel
{
    public TransitObject|null $resource = null;

    public function setResource(TransitObject $resource): static
    {
        $this->resource = $resource;

        return $this;
    }

    public function getResource(): TransitObject
    {
        return $this->resource;
    }
}
