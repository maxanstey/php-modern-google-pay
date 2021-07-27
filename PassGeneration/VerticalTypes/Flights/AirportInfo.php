<?php

namespace PassGeneration\VerticalTypes\Flights;

use PassGeneration\DataTypes\LocalizedString;
use Google\Model as GoogleModel;

class AirportInfo extends GoogleModel
{
    public string|null $airportIataCode = null;
    public LocalizedString|null $airportNameOverride = null;
    public string|null $gate = null;
    public string|null $kind = null;
    public string|null $terminal = null;

    public function setAirportIataCode(string $airportIataCode): static
    {
        $this->airportIataCode = $airportIataCode;

        return $this;
    }

    public function getAirportIataCode(): string
    {
        return $this->airportIataCode;
    }

    public function setAirportNameOverride(LocalizedString $airportNameOverride): static
    {
        $this->airportNameOverride = $airportNameOverride;

        return $this;
    }

    public function getAirportNameOverride(): LocalizedString
    {
        return $this->airportNameOverride;
    }

    public function setGate(string $gate): static
    {
        $this->gate = $gate;

        return $this;
    }

    public function getGate(): string
    {
        return $this->gate;
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

    public function setTerminal(string $terminal): static
    {
        $this->terminal = $terminal;

        return $this;
    }

    public function getTerminal(): string
    {
        return $this->terminal;
    }
}
