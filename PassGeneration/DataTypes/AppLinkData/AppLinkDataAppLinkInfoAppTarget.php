<?php

namespace PassGeneration\DataTypes\AppLinkData;

use PassGeneration\DataTypes\Uri;
use Google\Model as GoogleModel;

class AppLinkDataAppLinkInfoAppTarget extends GoogleModel
{
    public Uri|null $targetUri = null;

    public function setTargetUri(Uri $targetUri): static
    {
        $this->targetUri = $targetUri;

        return $this;
    }

    public function getTargetUri(): Uri
    {
        return $this->targetUri;
    }
}
