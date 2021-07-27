<?php

namespace PassGeneration\VerticalTypes\Events;

use PassGeneration\DataTypes\LocalizedString;
use Google\Model as GoogleModel;

class EventVenue extends GoogleModel
{
    public LocalizedString|null $address = null;
    public string|null $kind = null;
    public LocalizedString|null $name = null;

    public function setAddress(LocalizedString $address): static
    {
        $this->address = $address;

        return $this;
    }

    public function getAddress(): LocalizedString
    {
        return $this->address;
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

    public function setName(LocalizedString $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getName(): LocalizedString
    {
        return $this->name;
    }
}
