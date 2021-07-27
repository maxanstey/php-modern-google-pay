<?php

namespace PassGeneration\VerticalTypes\Flights;

use Google\Model as GoogleModel;

class FlightHeader extends GoogleModel
{
    public FlightCarrier|null $carrier = null;
    public string|null $flightNumber = null;
    public string|null $kind = null;
    public FlightCarrier|null $operatingCarrier = null;
    public string|null $operatingFlightNumber = null;

    public function setCarrier(FlightCarrier $carrier): static
    {
        $this->carrier = $carrier;

        return $this;
    }

    public function getCarrier(): FlightCarrier
    {
        return $this->carrier;
    }

    public function setFlightNumber($flightNumber): static
    {
        $this->flightNumber = $flightNumber;

        return $this;
    }

    public function getFlightNumber(): string
    {
        return $this->flightNumber;
    }

    public function setKind($kind): static
    {
        $this->kind = $kind;

        return $this;
    }

    public function getKind(): string
    {
        return $this->kind;
    }

    public function setOperatingCarrier(FlightCarrier $operatingCarrier): static
    {
        $this->operatingCarrier = $operatingCarrier;

        return $this;
    }

    public function getOperatingCarrier(): FlightCarrier
    {
        return $this->operatingCarrier;
    }

    public function setOperatingFlightNumber($operatingFlightNumber): static
    {
        $this->operatingFlightNumber = $operatingFlightNumber;

        return $this;
    }

    public function getOperatingFlightNumber(): string
    {
        return $this->operatingFlightNumber;
    }
}
