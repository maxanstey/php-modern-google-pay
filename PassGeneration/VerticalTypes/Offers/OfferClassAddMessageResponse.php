<?php

namespace PassGeneration\VerticalTypes\Offers;

use Google\Model as GoogleModel;

class OfferClassAddMessageResponse extends GoogleModel
{
    public OfferClass|null $resource = null;

    public function setResource(OfferClass $resource): static
    {
        $this->resource = $resource;

        return $this;
    }

    public function getResource(): OfferClass
    {
        return $this->resource;
    }
}
