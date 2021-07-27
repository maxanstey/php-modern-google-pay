<?php

namespace PassGeneration\DataTypes\DiscoverablePrograms;

use PassGeneration\DataTypes\Uri;
use Google\Model as GoogleModel;

class DiscoverableProgramMerchantSigninInfo extends GoogleModel
{
    public Uri|null $signinWebsite = null;

    public function setSigninWebsite(Uri $signInWebsite): static
    {
        $this->signinWebsite = $signInWebsite;

        return $this;
    }
    public function getSigninWebsite(): Uri
    {
        return $this->signinWebsite;
    }
}
