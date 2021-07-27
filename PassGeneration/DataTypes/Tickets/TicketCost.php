<?php

namespace PassGeneration\DataTypes\Tickets;

use PassGeneration\DataTypes\LocalizedString;
use PassGeneration\DataTypes\Money as GoogleMoney;
use Google\Model as GoogleModel;

class TicketCost extends GoogleModel
{
    public LocalizedString|null $discountMessage = null;
    public GoogleMoney|null $faceValue = null;
    public GoogleMoney|null $purchasePrice = null;

    public function setDiscountMessage(LocalizedString $discountMessage): static
    {
        $this->discountMessage = $discountMessage;

        return $this;
    }

    public function getDiscountMessage(): LocalizedString
    {
        return $this->discountMessage;
    }

    public function setFaceValue(GoogleMoney $faceValue): static
    {
        $this->faceValue = $faceValue;

        return $this;
    }

    public function getFaceValue(): GoogleMoney
    {
        return $this->faceValue;
    }

    public function setPurchasePrice(GoogleMoney $purchasePrice): static
    {
        $this->purchasePrice = $purchasePrice;

        return $this;
    }

    public function getPurchasePrice(): GoogleMoney
    {
        return $this->purchasePrice;
    }
}
