<?php

namespace PassGeneration\VerticalTypes\GiftCards;

use Google\Model as GoogleModel;

class GiftCardClassAddMessageResponse extends GoogleModel
{
    public GiftCardClass|null $resource = null;

    public function setResource(GiftCardClass $resource): static
    {
        $this->resource = $resource;

        return $this;
    }

    public function getResource(): GiftCardClass
    {
        return $this->resource;
    }
}
