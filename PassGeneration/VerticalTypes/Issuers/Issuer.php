<?php

namespace PassGeneration\VerticalTypes\Issuers;

use Google\Model as GoogleModel;
use PassGeneration\SmartTap\SmartTapMerchantData as SmartTapMerchantData;

class Issuer extends GoogleModel
{
    public string|null $homePageUrl = null;
    public string|null $issuerId = null;
    public string|null $name = null;
    public IssuerContactInfo $contactInfo ;
    public SmartTapMerchantData|null $smartTapMerchantData = null;

    public function setContactInfo(IssuerContactInfo $contactInfo): static
    {
        $this->contactInfo = $contactInfo;

        return $this;
    }

    public function getContactInfo(): IssuerContactInfo
    {
        return $this->contactInfo;
    }

    public function setHomePageUrl(string $homePageUrl): static
    {
        $this->homePageUrl = $homePageUrl;

        return $this;
    }

    public function getHomePageUrl(): string
    {
        return $this->homePageUrl;
    }

    public function setIssuerId(string $issuerId): static
    {
        $this->issuerId = $issuerId;

        return $this;
    }

    public function getIssuerId(): string
    {
        return $this->issuerId;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setSmartTapMerchantData(SmartTapMerchantData $smartTapMerchantData): static
    {
        $this->smartTapMerchantData = $smartTapMerchantData;

        return $this;
    }

    public function getSmartTapMerchantData(): SmartTapMerchantData
    {
        return $this->smartTapMerchantData;
    }
}
