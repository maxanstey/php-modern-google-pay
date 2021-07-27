<?php

namespace PassGeneration\DataTypes;

use Google\Model as GoogleModel;
use PassGeneration\DataTypes\Barcodes\CardBarcodeSectionDetails;
use PassGeneration\Overrides\CardTemplateOverride as CardTemplateOverride;
use PassGeneration\Overrides\DetailsTemplateOverride as DetailsTemplateOverride;
use PassGeneration\Overrides\ListTemplateOverride as ListTemplateOverride;

class ClassTemplateInfo extends GoogleModel
{
    public CardBarcodeSectionDetails|null $cardBarcodeSectionDetails = null;
    public CardTemplateOverride|null $cardTemplateOverride = null;
    public DetailsTemplateOverride|null $detailsTemplateOverride = null;
    public ListTemplateOverride|null $listTemplateOverride = null;

    public function setCardBarcodeSectionDetails(CardBarcodeSectionDetails $cardBarcodeSectionDetails): static
    {
        $this->cardBarcodeSectionDetails = $cardBarcodeSectionDetails;

        return $this;
    }

    public function getCardBarcodeSectionDetails(): CardBarcodeSectionDetails
    {
        return $this->cardBarcodeSectionDetails;
    }

    public function setCardTemplateOverride(CardTemplateOverride $cardTemplateOverride): static
    {
        $this->cardTemplateOverride = $cardTemplateOverride;

        return $this;
    }

    public function getCardTemplateOverride(): CardTemplateOverride
    {
        return $this->cardTemplateOverride;
    }

    public function setDetailsTemplateOverride(DetailsTemplateOverride $detailsTemplateOverride): static
    {
        $this->detailsTemplateOverride = $detailsTemplateOverride;

        return $this;
    }

    public function getDetailsTemplateOverride(): DetailsTemplateOverride
    {
        return $this->detailsTemplateOverride;
    }

    public function setListTemplateOverride(ListTemplateOverride $listTemplateOverride): static
    {
        $this->listTemplateOverride = $listTemplateOverride;

        return $this;
    }

    public function getListTemplateOverride(): ListTemplateOverride
    {
        return $this->listTemplateOverride;
    }
}
