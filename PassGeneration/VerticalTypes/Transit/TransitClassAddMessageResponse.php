<?php

namespace PassGeneration\VerticalTypes\Transit;

use Google\Model as GoogleModel;

class TransitClassAddMessageResponse extends GoogleModel
{
    public TransitClass|null $resource = null;

    public function setResource(TransitClass $resource): static
    {
        $this->resource = $resource;

        return $this;
    }

    public function getResource(): TransitClass
    {
        return $this->resource;
    }
}
