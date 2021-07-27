<?php

namespace PassGeneration\VerticalTypes\Events;

use Google\Collection as GoogleCollection;

class ModifyLinkedOfferObjects extends GoogleCollection
{
    /**
     * @var string|null
     */
    protected $collection_key = 'removeLinkedOfferObjectIds';
    /**
     * @var string[]|null
     */
    public array|null $addLinkedOfferObjectIds = null;
    /**
     * @var string[]|null
     */
    public array|null $removeLinkedOfferObjectIds = null;

    public function setAddLinkedOfferObjectIds($addLinkedOfferObjectIds): static
    {
        $this->addLinkedOfferObjectIds = $addLinkedOfferObjectIds;

        return $this;
    }

    public function getAddLinkedOfferObjectIds(): array
    {
        return $this->addLinkedOfferObjectIds;
    }

    public function setRemoveLinkedOfferObjectIds($removeLinkedOfferObjectIds): static
    {
        $this->removeLinkedOfferObjectIds = $removeLinkedOfferObjectIds;

        return $this;
    }

    public function getRemoveLinkedOfferObjectIds(): array
    {
        return $this->removeLinkedOfferObjectIds;
    }
}
