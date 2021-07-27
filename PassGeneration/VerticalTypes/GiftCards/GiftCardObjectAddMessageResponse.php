<?php

namespace PassGeneration\VerticalTypes\GiftCards;

use Google\Model as GoogleModel;

class GiftCardObjectAddMessageResponse extends GoogleModel
{
    public GiftCardObject|null $resource = null;

    public function setResource(GiftCardObject $resource): static
    {
        $this->resource = $resource;

        return $this;
    }

    public function getResource(): GiftCardObject
    {
        return $this->resource;
    }
}
