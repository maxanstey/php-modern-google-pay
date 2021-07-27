<?php

namespace PassGeneration\DataTypes\Cards;

use PassGeneration\DataTypes\TemplateItem;
use Google\Model as GoogleModel;

class CardRowOneItem extends GoogleModel
{
    public TemplateItem|null $item = null;

    public function setItem(TemplateItem $item): static
    {
        $this->item = $item;

        return $this;
    }

    public function getItem(): TemplateItem
    {
        return $this->item;
    }
}
