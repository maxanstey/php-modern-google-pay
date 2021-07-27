<?php

namespace PassGeneration\DataTypes\Images;

use Google\Model as GoogleModel;

class Image extends GoogleModel
{
    public string|null $kind = null;
    public ImageUri|null $source_uri = null;

    public function setKind($kind): static
    {
        $this->kind = $kind;

        return $this;
    }

    public function getKind(): string
    {
        return $this->kind;
    }

    public function setSourceUri(ImageUri $sourceUri): static
    {
        $this->source_uri = $sourceUri;

        return $this;
    }

    public function getSourceUri(): ImageUri
    {
        return $this->source_uri;
    }
}
