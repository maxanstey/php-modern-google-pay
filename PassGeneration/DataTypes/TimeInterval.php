<?php

namespace PassGeneration\DataTypes;

use Google\Model as GoogleModel;
use PassGeneration\DataTypes\DateTime as GoogleDateTime;

class TimeInterval extends GoogleModel
{
    public string|null $kind = null;
    public GoogleDateTime|null $end = null;
    public GoogleDateTime|null $start = null;

    public function setEnd(GoogleDateTime $end): static
    {
        $this->end = $end;

        return $this;
    }

    public function getEnd(): GoogleDateTime
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

    public function setStart(GoogleDateTime $start): static
    {
        $this->start = $start;

        return $this;
    }

    public function getStart(): GoogleDateTime
    {
        return $this->start;
    }
}
