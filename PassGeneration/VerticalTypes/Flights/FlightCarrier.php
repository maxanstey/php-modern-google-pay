<?php

namespace PassGeneration\VerticalTypes\Flights;

use PassGeneration\DataTypes\Images\Image as GoogleImage;
use PassGeneration\DataTypes\LocalizedString;
use Google\Model as GoogleModel;

class FlightCarrier extends GoogleModel
{
    public GoogleImage|null $airlineAllianceLogo = null;
    public GoogleImage|null $airlineLogo = null;
    public LocalizedString|null $airlineName = null;
    public string|null $carrierIataCode = null;
    public string|null $carrierIcaoCode = null;
    public string|null $kind = null;

    public function setAirlineAllianceLogo(GoogleImage $airlineAllianceLogo): static
    {
        $this->airlineAllianceLogo = $airlineAllianceLogo;

        return $this;
    }

    public function getAirlineAllianceLogo(): GoogleImage
    {
        return $this->airlineAllianceLogo;
    }

    public function setAirlineLogo(GoogleImage $airlineLogo): static
    {
        $this->airlineLogo = $airlineLogo;

        return $this;
    }

    public function getAirlineLogo(): GoogleImage
    {
        return $this->airlineLogo;
    }

    public function setAirlineName(LocalizedString $airlineName): static
    {
        $this->airlineName = $airlineName;

        return $this;
    }

    public function getAirlineName(): LocalizedString
    {
        return $this->airlineName;
    }

    public function setCarrierIataCode($carrierIataCode): static
    {
        $this->carrierIataCode = $carrierIataCode;

        return $this;
    }

    public function getCarrierIataCode(): string
    {
        return $this->carrierIataCode;
    }

    public function setCarrierIcaoCode($carrierIcaoCode): static
    {
        $this->carrierIcaoCode = $carrierIcaoCode;

        return $this;
    }

    public function getCarrierIcaoCode(): string
    {
        return $this->carrierIcaoCode;
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
}

