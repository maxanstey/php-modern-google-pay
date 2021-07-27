<?php

namespace PassGeneration\VerticalTypes\Loyalty;

use PassGeneration\DataTypes\LocalizedString;
use Google\Model as GoogleModel;

class LoyaltyPoints extends GoogleModel
{
    public LoyaltyPointsBalance|null $balance = null;
    public string|null $label = null;
    public LocalizedString|null $localizedLabel = null;

    public function setBalance(LoyaltyPointsBalance $balance): static
    {
        $this->balance = $balance;

        return $this;
    }

    public function getBalance(): LoyaltyPointsBalance
    {
        return $this->balance;
    }

    public function setLabel($label): static
    {
        $this->label = $label;

        return $this;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLocalizedLabel(LocalizedString $localizedLabel): static
    {
        $this->localizedLabel = $localizedLabel;

        return $this;
    }

    public function getLocalizedLabel(): LocalizedString
    {
        return $this->localizedLabel;
    }
}
