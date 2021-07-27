<?php

namespace PassGeneration\SmartTap;

use Google\Collection as GoogleCollection;
use PassGeneration\DataTypes\AuthenticationKey as AuthenticationKey;

class SmartTapMerchantData extends GoogleCollection
{
    /**
     * @var string|null
     */
    protected $collection_key = 'authenticationKeys';
    /**
     * @var string|null
     */
    public string|null $smartTapMerchantId = null;
    /**
     * @var AuthenticationKey|null[]
     */
    public array|null $authenticationKeys = null;

    public function setAuthenticationKeys(array $authenticationKeys): static
    {
        $this->authenticationKeys = $authenticationKeys;

        return $this;
    }

    public function getAuthenticationKeys(): array
    {
        return $this->authenticationKeys;
    }

    public function setSmartTapMerchantId(string $smartTapMerchantId): static
    {
        $this->smartTapMerchantId = $smartTapMerchantId;

        return $this;
    }

    public function getSmartTapMerchantId(): string
    {
        return $this->smartTapMerchantId;
    }
}
