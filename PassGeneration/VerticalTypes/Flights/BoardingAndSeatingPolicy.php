<?php

namespace PassGeneration\VerticalTypes\Flights;

use Google\Model as GoogleModel;

class BoardingAndSeatingPolicy extends GoogleModel
{
    public string|null $boardingPolicy = null;
    public string|null $kind = null;
    public string|null $seatClassPolicy = null;

    public function setBoardingPolicy(string $boardingPolicy): static
    {
        $this->boardingPolicy = $boardingPolicy;

        return $this;
    }

    public function getBoardingPolicy(): string
    {
        return $this->boardingPolicy;
    }

    public function setKind(string $kind): static
    {
        $this->kind = $kind;

        return $this;
    }

    public function getKind(): string
    {
        return $this->kind;
    }

    public function setSeatClassPolicy(string $seatClassPolicy): static
    {
        $this->seatClassPolicy = $seatClassPolicy;

        return $this;
    }

    public function getSeatClassPolicy(): string
    {
        return $this->seatClassPolicy;
    }
}
