<?php

namespace PassGeneration\VerticalTypes\Loyalty;

use PassGeneration\DataTypes\Money as GoogleMoney;
use Google\Model as GoogleModel;

class LoyaltyPointsBalance extends GoogleModel
{
    public float|null $double = null;
    public int|null $int = null;
    public GoogleMoney|null $money = null;
    public string|null $string = null;

    public function setDouble(float $double): static
    {
        $this->double = $double;

        return $this;
    }

    public function getDouble(): float
    {
        return $this->double;
    }

    public function setInt(int $int): static
    {
        $this->int = $int;

        return $this;
    }

    public function getInt(): int
    {
        return $this->int;
    }

    public function setMoney(GoogleMoney $money): static
    {
        $this->money = $money;

        return $this;
    }

    public function getMoney(): GoogleMoney
    {
        return $this->money;
    }

    public function setString(string $string): static
    {
        $this->string = $string;

        return $this;
    }

    public function getString(): string
    {
        return $this->string;
    }
}
