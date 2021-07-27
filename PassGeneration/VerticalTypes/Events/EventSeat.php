<?php

namespace PassGeneration\VerticalTypes\Events;

use Google\Model as GoogleModel;
use PassGeneration\DataTypes\LocalizedString;

class EventSeat extends GoogleModel
{
    public string|null $kind = null;
    public LocalizedString|null $gate = null;
    public LocalizedString|null $row = null;
    public LocalizedString|null $seat = null;
    public LocalizedString|null $section = null;

    public function setGate(LocalizedString $gate): static
    {
        $this->gate = $gate;

        return $this;
    }

    public function getGate(): LocalizedString
    {
        return $this->gate;
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

    public function setRow(LocalizedString $row): static
    {
        $this->row = $row;

        return $this;
    }

    public function getRow(): LocalizedString
    {
        return $this->row;
    }

    public function setSeat(LocalizedString $seat): static
    {
        $this->seat = $seat;

        return $this;
    }

    public function getSeat(): LocalizedString
    {
        return $this->seat;
    }

    public function setSection(LocalizedString $section): static
    {
        $this->section = $section;

        return $this;
    }

    public function getSection(): LocalizedString
    {
        return $this->section;
    }
}

