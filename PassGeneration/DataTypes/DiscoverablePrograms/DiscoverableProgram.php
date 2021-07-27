<?php

namespace PassGeneration\DataTypes\DiscoverablePrograms;

use Google\Model as GoogleModel;

class DiscoverableProgram extends GoogleModel
{
    public DiscoverableProgramMerchantSigninInfo|null $merchantSigninInfo = null;
    public DiscoverableProgramMerchantSigninInfo|null $merchantSignupInfo = null;
    public string|null $state = null;

    public function setMerchantSigninInfo(DiscoverableProgramMerchantSigninInfo $merchantSigninInfo): static
    {
        $this->merchantSigninInfo = $merchantSigninInfo;

        return $this;
    }

    public function getMerchantSigninInfo(): DiscoverableProgramMerchantSigninInfo
    {
        return $this->merchantSigninInfo;
    }

    public function setMerchantSignupInfo(DiscoverableProgramMerchantSigninInfo $merchantSignupInfo): static
    {
        $this->merchantSignupInfo = $merchantSignupInfo;

        return $this;
    }

    public function getMerchantSignupInfo(): DiscoverableProgramMerchantSigninInfo
    {
        return $this->merchantSignupInfo;
    }

    public function setState(string $state): static
    {
        $this->state = $state;

        return $this;
    }

    public function getState(): string
    {
        return $this->state;
    }
}
