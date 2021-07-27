<?php

namespace PassGeneration\DataTypes\Barcodes;

use Google\Model as GoogleModel;

class CardBarcodeSectionDetails extends GoogleModel
{
    public BarcodeSectionDetail|null $firstBottomDetail = null;
    public BarcodeSectionDetail|null $firstTopDetail = null;
    public BarcodeSectionDetail|null $secondTopDetail = null;

    public function setFirstBottomDetail(BarcodeSectionDetail $firstBottomDetail): static
    {
        $this->firstBottomDetail = $firstBottomDetail;

        return $this;
    }

    public function getFirstBottomDetail(): BarcodeSectionDetail
    {
        return $this->firstBottomDetail;
    }

    public function setFirstTopDetail(BarcodeSectionDetail $firstTopDetail): static
    {
        $this->firstTopDetail = $firstTopDetail;

        return $this;
    }

    public function getFirstTopDetail(): BarcodeSectionDetail
    {
        return $this->firstTopDetail;
    }

    public function setSecondTopDetail(BarcodeSectionDetail $secondTopDetail): static
    {
        $this->secondTopDetail = $secondTopDetail;

        return $this;
    }

    public function getSecondTopDetail(): BarcodeSectionDetail
    {
        return $this->secondTopDetail;
    }
}
