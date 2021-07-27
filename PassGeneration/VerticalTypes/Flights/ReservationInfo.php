<?php

namespace PassGeneration\VerticalTypes\Flights;

use Google\Model as GoogleModel;

class ReservationInfo extends GoogleModel
{
    public string|null $confirmationCode = null;
    public string|null $eticketNumber = null;
    public FrequentFlyerInfo|null $frequentFlyerInfo = null;
    public string|null $kind = null;

    public function setConfirmationCode($confirmationCode): static
    {
        $this->confirmationCode = $confirmationCode;

        return $this;
    }

    public function getConfirmationCode(): string
    {
        return $this->confirmationCode;
    }

    public function setEticketNumber($eticketNumber): static
    {
        $this->eticketNumber = $eticketNumber;

        return $this;
    }

    public function getEticketNumber(): string
    {
        return $this->eticketNumber;
    }

    public function setFrequentFlyerInfo(FrequentFlyerInfo $frequentFlyerInfo): static
    {
        $this->frequentFlyerInfo = $frequentFlyerInfo;

        return $this;
    }

    public function getFrequentFlyerInfo(): FrequentFlyerInfo
    {
        return $this->frequentFlyerInfo;
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
