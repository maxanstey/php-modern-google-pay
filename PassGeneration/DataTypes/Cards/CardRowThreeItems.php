<?php

namespace PassGeneration\DataTypes\Cards;

use PassGeneration\DataTypes\TemplateItem;
use Google\Model as GoogleModel;

class CardRowThreeItems extends GoogleModel
{
    public TemplateItem$endItem;
    public TemplateItem|null $middleItem = null;
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

    public function setMiddleItem(TemplateItem $middleItem): static
    {
        $this->middleItem = $middleItem;

        return $this;
    }

    public function getMiddleItem(): TemplateItem
    {
        return $this->middleItem;
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
