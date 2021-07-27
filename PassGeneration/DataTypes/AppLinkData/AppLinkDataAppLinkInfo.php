<?php

namespace PassGeneration\DataTypes\AppLinkData;

use PassGeneration\DataTypes\Images\Image as GoogleImage;
use PassGeneration\DataTypes\AppLinkData\AppLinkDataAppLinkInfoAppTarget as AppTarget;
use PassGeneration\DataTypes\LocalizedString;
use Google\Model as GoogleModel;

class AppLinkDataAppLinkInfo extends GoogleModel
{
    public GoogleImage|null $appLogoImage = null;
    public AppTarget|null $appTarget = null;
    public LocalizedString|null $description = null;
    public LocalizedString|null $title = null;

    public function setAppLogoImage(GoogleImage $appLogoImage): static
    {
        $this->appLogoImage = $appLogoImage;

        return $this;
    }

    public function getAppLogoImage(): GoogleImage
    {
        return $this->appLogoImage;
    }

    public function setAppTarget(AppTarget $appTarget): static
    {
        $this->appTarget = $appTarget;

        return $this;
    }

    public function getAppTarget(): AppTarget
    {
        return $this->appTarget;
    }

    public function setDescription(LocalizedString $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDescription(): LocalizedString
    {
        return $this->description;
    }

    public function setTitle(LocalizedString $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getTitle(): LocalizedString
    {
        return $this->title;
    }
}
