<?php

namespace PassGeneration\Overrides;

use PassGeneration\DataTypes\Fields\FieldSelector;
use PassGeneration\DataTypes\Fields\FirstRowOption;
use Google\Model as GoogleModel;

class ListTemplateOverride extends GoogleModel
{
    public FirstRowOption|null $firstRowOption = null;
    public FieldSelector|null $secondRowOption = null;
    public FieldSelector|null $thirdRowOption = null;

    public function setFirstRowOption(FirstRowOption $firstRowOption): static
    {
        $this->firstRowOption = $firstRowOption;

        return $this;
    }

    public function getFirstRowOption(): FirstRowOption
    {
        return $this->firstRowOption;
    }

    public function setSecondRowOption(FieldSelector $secondRowOption): static
    {
        $this->secondRowOption = $secondRowOption;

        return $this;
    }

    public function getSecondRowOption(): FieldSelector
    {
        return $this->secondRowOption;
    }

    public function setThirdRowOption(FieldSelector $thirdRowOption): static
    {
        $this->thirdRowOption = $thirdRowOption;

        return $this;
    }

    public function getThirdRowOption(): FieldSelector
    {
        return $this->thirdRowOption;
    }
}
