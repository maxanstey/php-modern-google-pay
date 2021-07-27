<?php

namespace PassGeneration\DataTypes\Cards;

use Google\Model as GoogleModel;

class CardRowTemplateInfo extends GoogleModel
{
    public CardRowOneItem|null $oneItem = null;
    public CardRowTwoItems|null $twoItems = null;
    public CardRowThreeItems|null $threeItems = null;

    public function setOneItem(CardRowOneItem $oneItem): static
    {
        $this->oneItem = $oneItem;

        return $this;
    }

    public function getOneItem(): CardRowOneItem
    {
        return $this->oneItem;
    }

    public function setTwoItems(CardRowTwoItems $twoItems): static
    {
        $this->twoItems = $twoItems;

        return $this;
    }

    public function getTwoItems(): CardRowTwoItems
    {
        return $this->twoItems;
    }

    public function setThreeItems(CardRowThreeItems $threeItems): static
    {
        $this->threeItems = $threeItems;

        return $this;
    }

    public function getThreeItems(): CardRowThreeItems
    {
        return $this->threeItems;
    }
}
