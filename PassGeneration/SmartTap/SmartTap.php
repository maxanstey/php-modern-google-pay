<?php

namespace PassGeneration\SmartTap;

use Google\Collection as GoogleCollection;
use PassGeneration\VerticalTypes\Issuers\IssuerToUserInfo;

class SmartTap extends GoogleCollection
{
    /**
     * @var string|null
     */
    protected $collection_key = 'infos';
    /**
     * @var string|null
     */
    public string|null $id = null;
    /**
     * @var string|null
     */
    public string|null $kind = null;
    /**
     * @var string|null
     */
    public string|null $merchantId = null;
    /**
     * @var IssuerToUserInfo[]|null
     */
    public array|null $infos = null;

    public function setId(string $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setInfos(mixed $infos): static
    {
        $this->infos = $infos;

        return $this;
    }

    public function getInfos(): mixed
    {
        return $this->infos;
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

    public function setMerchantId(string $merchantId): static
    {
        $this->merchantId = $merchantId;

        return $this;
    }

    public function getMerchantId(): string
    {
        return $this->merchantId;
    }
}
