<?php

namespace PassGeneration\VerticalTypes\Events;

use Google\Model as GoogleModel;
use PassGeneration\DataTypes\LocalizedString;

class EventDateTime extends GoogleModel
{
    public string|null $doorsOpen = null;
    public string|null $doorsOpenLabel = null;
    public string|null $end = null;
    public string|null $kind = null;
    public string|null $start = null;
    public LocalizedString|null $customDoorsOpenLabel = null;

    public function setCustomDoorsOpenLabel(LocalizedString $customDoorsOpenLabel): static
    {
        $this->customDoorsOpenLabel = $customDoorsOpenLabel;

        return $this;
    }

    public function getCustomDoorsOpenLabel(): LocalizedString
    {
        return $this->customDoorsOpenLabel;
    }

    public function setDoorsOpen(string $doorsOpen): static
    {
        $this->doorsOpen = $doorsOpen;

        return $this;
    }

    public function getDoorsOpen(): string
    {
        return $this->doorsOpen;
    }

    public function setDoorsOpenLabel(string $doorsOpenLabel): static
    {
        $this->doorsOpenLabel = $doorsOpenLabel;

        return $this;
    }

    public function getDoorsOpenLabel(): string
    {
        return $this->doorsOpenLabel;
    }

    public function setEnd(string $end): static
    {
        $this->end = $end;

        return $this;
    }

    public function getEnd(): string
    {
        return $this->end;
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

    public function setStart(string $start): static
    {
        $this->start = $start;

        return $this;
    }

    public function getStart(): string
    {
        return $this->start;
    }
}

