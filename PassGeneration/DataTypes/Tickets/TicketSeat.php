<?php

namespace PassGeneration\DataTypes\Tickets;

use PassGeneration\DataTypes\LocalizedString;
use Google\Model as GoogleModel;

class TicketSeat extends GoogleModel
{
    public string|null $coach = null;
    public LocalizedString|null $customFareClass = null;
    public string|null $fareClass = null;
    public string|null $seat = null;
    public LocalizedString|null $seatAssignment = null;


    public function setCoach(string $coach): static
    {
        $this->coach = $coach;

        return $this;
    }

    public function getCoach(): string
    {
        return $this->coach;
    }

    public function setCustomFareClass(LocalizedString $customFareClass): static
    {
        $this->customFareClass = $customFareClass;

        return $this;
    }

    public function getCustomFareClass(): LocalizedString
    {
        return $this->customFareClass;
    }

    public function setFareClass(string $fareClass): static
    {
        $this->fareClass = $fareClass;

        return $this;
    }

    public function getFareClass(): string
    {
        return $this->fareClass;
    }

    public function setSeat(string $seat): static
    {
        $this->seat = $seat;

        return $this;
    }

    public function getSeat(): string
    {
        return $this->seat;
    }

    public function setSeatAssignment(LocalizedString $seatAssignment): static
    {
        $this->seatAssignment = $seatAssignment;

        return $this;
    }

    public function getSeatAssignment(): LocalizedString
    {
        return $this->seatAssignment;
    }
}
