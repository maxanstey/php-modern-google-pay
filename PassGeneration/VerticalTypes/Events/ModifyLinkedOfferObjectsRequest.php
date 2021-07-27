<?php

namespace PassGeneration\VerticalTypes\Events;

use Google\Model as GoogleModel;

class ModifyLinkedOfferObjectsRequest extends GoogleModel
{
    public ModifyLinkedOfferObjects|null $linkedOfferObjectIds = null;

    public function setLinkedOfferObjectIds(ModifyLinkedOfferObjects $linkedOfferObjectIds): static
    {
        $this->linkedOfferObjectIds = $linkedOfferObjectIds;

        return $this;
    }

    public function getLinkedOfferObjectIds(): ModifyLinkedOfferObjects
    {
        return $this->linkedOfferObjectIds;
    }
}
