<?php

namespace PassGeneration\Jwt;

use PassGeneration\DataTypes\Resources as GoogleResources;
use Google\Model as GoogleModel;

class JwtInsertResponse extends GoogleModel
{
    public string|null $saveUri = null;
    public GoogleResources|null $resources = null;

    public function setResources(GoogleResources $resources): static
    {
        $this->resources = $resources;

        return $this;
    }

    public function getResources(): GoogleResources
    {
        return $this->resources;
    }

    public function setSaveUri(string $saveUri): static
    {
        $this->saveUri = $saveUri;

        return $this;
    }

    public function getSaveUri(): string
    {
        return $this->saveUri;
    }
}
