<?php

namespace PassGeneration\DataTypes;

use Google\Model as GoogleModel;

class LatLongPoint extends GoogleModel
{
    public string|null $kind = null;
    public float|null $latitude = null;
    public float|null $longitude = null;

    public function setKind(string $kind): static
    {
        $this->kind = $kind;

        return $this;
    }

    public function getKind(): string
    {
        return $this->kind;
    }

    public function setLatitude(float $latitude): static
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLatitude(): float
    {
        return $this->latitude;
    }

    public function setLongitude(float $longitude): static
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getLongitude(): float
    {
        return $this->longitude;
    }
}

