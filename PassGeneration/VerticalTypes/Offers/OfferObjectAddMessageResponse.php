<?php

namespace PassGeneration\VerticalTypes\Offers;

use Google\Model as GoogleModel;

class OfferObjectAddMessageResponse extends GoogleModel
{
    public OfferObject|null $resource = null;

    public function setResource(OfferObject $resource): static
    {
        $this->resource = $resource;

        return $this;
    }

    public function getResource(): OfferObject
    {
        return $this->resource;
    }
}
