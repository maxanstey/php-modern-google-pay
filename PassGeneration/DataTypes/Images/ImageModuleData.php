<?php

namespace PassGeneration\DataTypes\Images;

use PassGeneration\DataTypes\Images\Image as GoogleImage;
use Google\Model as GoogleModel;

class ImageModuleData extends GoogleModel
{
    public string|null $id = null;
    public GoogleImage|null $mainImage = null;

    public function setId(string $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setMainImage(GoogleImage $mainImage): static
    {
        $this->mainImage = $mainImage;

        return $this;
    }

    public function getMainImage(): GoogleImage
    {
        return $this->mainImage;
    }
}

