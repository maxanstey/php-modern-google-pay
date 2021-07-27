<?php

namespace PassGeneration\Overrides;

use Google\Collection as GoogleCollection;
use PassGeneration\DataTypes\Cards\CardRowTemplateInfo;

class CardTemplateOverride extends GoogleCollection
{
    /**
     * @var string|null
     */
    protected $collection_key = 'cardRowTemplateInfos';
    /**
     * @var CardRowTemplateInfo|null[]
     */
    public array|null $cardRowTemplateInfos = null;

    public function setCardRowTemplateInfos(array $cardRowTemplateInfos): static
    {
        $this->cardRowTemplateInfos = $cardRowTemplateInfos;

        return $this;
    }

    public function getCardRowTemplateInfos(): array
    {
        return $this->cardRowTemplateInfos;
    }
}
