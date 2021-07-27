<?php

namespace PassGeneration\DataTypes\Cards;

use PassGeneration\DataTypes\TemplateItem;
use Google\Model as GoogleModel;

class CardRowTwoItems extends GoogleModel
{
    public TemplateItem|null $endItem = null;
    public TemplateItem|null $startItem = null;

    public function setEndItem(TemplateItem $endItem): static
    {
        $this->endItem = $endItem;

        return $this;
    }

    public function getEndItem(): TemplateItem
    {
        return $this->endItem;
    }

    public function setStartItem(TemplateItem $startItem): static
    {
        $this->startItem = $startItem;

        return $this;
    }

    public function getStartItem(): TemplateItem
    {
        return $this->startItem;
    }
}
