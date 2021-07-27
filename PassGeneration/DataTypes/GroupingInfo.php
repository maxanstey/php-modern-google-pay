<?php

namespace PassGeneration\DataTypes;

use Google\Model as GoogleModel;

class GroupingInfo extends GoogleModel
{
    public int|null $sortIndex = null;

    public function setSortIndex(int $sortIndex): static
    {
        $this->sortIndex = $sortIndex;

        return $this;
    }

    public function getSortIndex(): int
    {
        return $this->sortIndex;
    }
}
