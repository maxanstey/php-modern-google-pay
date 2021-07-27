<?php

namespace PassGeneration\DataTypes\Images;

use PassGeneration\DataTypes\LocalizedString;
use Google\Model as GoogleModel;

class ImageUri extends GoogleModel
{
    public string|null $description = null;
    public LocalizedString|null $localizedDescription = null;
    public string|null $uri = null;

    public function setDescription($description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setLocalizedDescription(LocalizedString $localizedDescription): static
    {
        $this->localizedDescription = $localizedDescription;

        return $this;
    }

    public function getLocalizedDescription(): LocalizedString
    {
        return $this->localizedDescription;
    }

    public function setUri($uri): static
    {
        $this->uri = $uri;

        return $this;
    }

    public function getUri(): string
    {
        return $this->uri;
    }
}
