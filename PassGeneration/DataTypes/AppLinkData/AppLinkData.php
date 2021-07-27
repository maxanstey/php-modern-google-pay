<?php

namespace PassGeneration\DataTypes\AppLinkData;

use PassGeneration\DataTypes\AppLinkData\AppLinkDataAppLinkInfo as AppLinkInfo;
use Google\Model as GoogleModel;

class AppLinkData extends GoogleModel
{
    public AppLinkInfo|null $androidAppLinkInfo = null;
    public AppLinkInfo|null $iosAppLinkInfo = null;
    public AppLinkInfo|null $webAppLinkInfo = null;

    public function setAndroidAppLinkInfo(AppLinkInfo $androidAppLinkInfo): static
    {
        $this->androidAppLinkInfo = $androidAppLinkInfo;

        return $this;
    }

    public function getAndroidAppLinkInfo(): AppLinkInfo
    {
        return $this->androidAppLinkInfo;
    }

    public function setIosAppLinkInfo(AppLinkInfo $iosAppLinkInfo): static
    {
        $this->iosAppLinkInfo = $iosAppLinkInfo;

        return $this;
    }

    public function getIosAppLinkInfo(): AppLinkInfo
    {
        return $this->iosAppLinkInfo;
    }

    public function setWebAppLinkInfo(AppLinkInfo $webAppLinkInfo): static
    {
        $this->webAppLinkInfo = $webAppLinkInfo;

        return $this;
    }

    public function getWebAppLinkInfo(): AppLinkInfo
    {
        return $this->webAppLinkInfo;
    }
}
