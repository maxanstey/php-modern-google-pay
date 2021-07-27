<?php

namespace PassGeneration\DataTypes;

use Google\Model as GoogleModel;

class CallbackOptions extends GoogleModel
{
    public string|null $updateRequestUrl = null;
    public string|null $url = null;

    public function setUpdateRequestUrl(string $updateRequestUrl): static
    {
        $this->updateRequestUrl = $updateRequestUrl;

        return $this;
    }

    public function getUpdateRequestUrl(): string
    {
        return $this->updateRequestUrl;
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
}
