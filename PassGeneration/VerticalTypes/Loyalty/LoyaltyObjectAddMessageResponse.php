<?php

namespace PassGeneration\VerticalTypes\Loyalty;

use Google\Model as GoogleModel;

class LoyaltyObjectAddMessageResponse extends GoogleModel
{
    public LoyaltyObject|null $resource = null;

    public function setResource(LoyaltyObject $resource): static
    {
        $this->resource = $resource;

        return $this;
    }

    public function getResource(): LoyaltyObject
    {
        return $this->resource;
    }
}
