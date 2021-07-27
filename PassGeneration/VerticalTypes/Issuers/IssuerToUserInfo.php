<?php

namespace PassGeneration\VerticalTypes\Issuers;

use Google\Model as GoogleModel;
use PassGeneration\DataTypes\SignUpInfo as SignUpInfo;

class IssuerToUserInfo extends GoogleModel
{
    public string|null $action = null;
    public string|null $url = null;
    public string|null $value = null;
    public SignUpInfo|null $signUpInfo = null;

    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    public function getAction(): string
    {
        return $this->action;
    }

    public function setSignUpInfo(SignUpInfo $signUpInfo): static
    {
        $this->signUpInfo = $signUpInfo;

        return $this;
    }

    public function getSignUpInfo(): SignUpInfo
    {
        return $this->signUpInfo;
    }

    public function setUrl(string $url): static
    {
        $this->url = $url;

        return $this;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setValue(string $value): static
    {
        $this->value = $value;

        return $this;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
