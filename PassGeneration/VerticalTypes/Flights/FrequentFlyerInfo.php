<?php

namespace PassGeneration\VerticalTypes\Flights;

use PassGeneration\DataTypes\LocalizedString;
use Google\Model as GoogleModel;

class FrequentFlyerInfo extends GoogleModel
{
    public string|null $frequentFlyerNumber = null;
    public LocalizedString|null $frequentFlyerProgramName = null;
    public string|null $kind = null;

    public function setFrequentFlyerNumber(string $frequentFlyerNumber): static
    {
        $this->frequentFlyerNumber = $frequentFlyerNumber;

        return $this;
    }

    public function getFrequentFlyerNumber(): string
    {
        return $this->frequentFlyerNumber;
    }

    public function setFrequentFlyerProgramName(LocalizedString $frequentFlyerProgramName): static
    {
        $this->frequentFlyerProgramName = $frequentFlyerProgramName;

        return $this;
    }

    public function getFrequentFlyerProgramName(): LocalizedString
    {
        return $this->frequentFlyerProgramName;
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
}
