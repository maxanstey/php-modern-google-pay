<?php

namespace PassGeneration\DataTypes\Barcodes;

use Google\Model as GoogleModel;
use PassGeneration\DataTypes\LocalizedString;

class Barcode extends GoogleModel
{
    public string|null $alternateText = null;
    public string|null $kind = null;
    public LocalizedString|null $showCodeText = null;
    public string|null $renderEncoding = null;
    public string|null $type = null;
    public string|null $value = null;

    public function setAlternateText(string $alternateText): static
    {
        $this->alternateText = $alternateText;

        return $this;
    }

    public function getAlternateText(): string
    {
        return $this->alternateText;
    }

    public function setKind(string $kind): static
    {
        $this->kind = $kind;

        return $this;
    }

    public function getKind(): string
    {
        return $this->kind;
    }

    public function setRenderEncoding(string $renderEncoding): static
    {
        $this->renderEncoding = $renderEncoding;

        return $this;
    }

    public function getRenderEncoding(): string
    {
        return $this->renderEncoding;
    }

    public function setShowCodeText(LocalizedString $showCodeText): static
    {
        $this->showCodeText = $showCodeText;

        return $this;
    }

    public function getShowCodeText(): LocalizedString
    {
        return $this->showCodeText;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
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
