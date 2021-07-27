<?php

namespace PassGeneration\DataTypes;

use Google\Model as GoogleModel;

class DateTime extends GoogleModel
{
    public string|null $date = null;

    public function setDate(string $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getDate(): string
    {
        return $this->date;
    }
}
