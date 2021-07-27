<?php

namespace PassGeneration\VerticalTypes\Events;

use Google\Model as GoogleModel;

class EventReservationInfo extends GoogleModel
{
    public string|null $confirmationCode = null;
    public string|null $kind = null;

    public function setConfirmationCode(string $confirmationCode): static
    {
        $this->confirmationCode = $confirmationCode;

        return $this;
    }

    public function getConfirmationCode(): string
    {
        return $this->confirmationCode;
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
