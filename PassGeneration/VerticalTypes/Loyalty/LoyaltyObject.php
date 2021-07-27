<?php

namespace PassGeneration\VerticalTypes\Loyalty;

use PassGeneration\DataTypes\AppLinkData\AppLinkData;
use PassGeneration\DataTypes\Barcodes\Barcode;
use PassGeneration\DataTypes\Images\ImageModuleData;
use PassGeneration\DataTypes\InfoModuleData;
use PassGeneration\DataTypes\LinksModuleData;
use PassGeneration\DataTypes\LatLongPoint;
use PassGeneration\DataTypes\Message as GoogleMessage;
use PassGeneration\DataTypes\TextModuleData;
use PassGeneration\DataTypes\TimeInterval;
use Google\Collection as GoogleCollection;

class LoyaltyObject extends GoogleCollection
{
    /**
     * @var string|null
     */
    protected $collection_key = 'textModulesData';
    /**
     * @var string|null
     */
    public string|null $accountId = null;
    /**
     * @var string|null
     */
    public string|null $accountName = null;
    /**
     * @var AppLinkData|null
     */
    public AppLinkData|null $appLinkData = null;
    /**
     * @var Barcode|null
     */
    public Barcode|null $barcode = null;
    /**
     * @var string|null
     */
    public string|null $classId = null;
    /**
     * @var LoyaltyClass|null
     */
    public LoyaltyClass|null $classReference = null;
    /**
     * @var bool|null
     */
    public bool|null $disableExpirationNotification = null;
    /**
     * @var bool|null
     */
    public bool|null $hasLinkedDevice = null;
    /**
     * @var bool|null
     */
    public bool|null $hasUsers = null;
    /**
     * @var string|null
     */
    public string|null $id = null;
    /**
     * @var ImageModuleData[]|null
     */
    public array|null $imageModulesData = null;
    /**
     * @var InfoModuleData|null
     */
    public InfoModuleData|null $infoModuleData = null;
    /**
     * @var string|null
     */
    public string|null $kind = null;
    /**
     * @var array|null
     */
    public array|null $linkedOfferIds = null;
    /**
     * @var LinksModuleData|null
     */
    public LinksModuleData|null $linksModuleData = null;
    /**
     * @var LatLongPoint[]|null
     */
    public array|null $locations = null;
    /**
     * @var LoyaltyPoints|null
     */
    public LoyaltyPoints|null $loyaltyPoints = null;
    /**
     * @var GoogleMessage[]|null
     */
    public array|null $messages = null;
    /**
     * @var LoyaltyPoints|null
     */
    public LoyaltyPoints|null $secondaryLoyaltyPoints = null;
    /**
     * @var string|null
     */
    public string|null $smartTapRedemptionValue = null;
    /**
     * @var string|null
     */
    public string|null $state = null;
    /**
     * @var TextModuleData[]|null
     */
    public array|null $textModulesData = null;
    /**
     * @var TimeInterval|null
     */
    public TimeInterval|null $validTimeInterval = null;
    /**
     * @var string|null
     */
    public string|null $version = null;

    public function setAccountId(string $accountId): static
    {
        $this->accountId = $accountId;

        return $this;
    }

    public function getAccountId(): string
    {
        return $this->accountId;
    }

    public function setAccountName(string $accountName): static
    {
        $this->accountName = $accountName;

        return $this;
    }

    public function getAccountName(): string
    {
        return $this->accountName;
    }

    public function setAppLinkData(AppLinkData $appLinkData): static
    {
        $this->appLinkData = $appLinkData;

        return $this;
    }

    public function getAppLinkData(): AppLinkData
    {
        return $this->appLinkData;
    }

    public function setBarcode(Barcode $barcode): static
    {
        $this->barcode = $barcode;

        return $this;
    }

    public function getBarcode(): Barcode
    {
        return $this->barcode;
    }

    public function setClassId(string $classId): static
    {
        $this->classId = $classId;

        return $this;
    }

    public function getClassId(): string
    {
        return $this->classId;
    }

    public function setClassReference(LoyaltyClass $classReference): static
    {
        $this->classReference = $classReference;

        return $this;
    }

    public function getClassReference(): LoyaltyClass
    {
        return $this->classReference;
    }

    public function setDisableExpirationNotification($disableExpirationNotification): static
    {
        $this->disableExpirationNotification = $disableExpirationNotification;

        return $this;
    }

    public function getDisableExpirationNotification(): bool
    {
        return $this->disableExpirationNotification;
    }

    public function setHasLinkedDevice(bool $hasLinkedDevice): static
    {
        $this->hasLinkedDevice = $hasLinkedDevice;

        return $this;
    }

    public function getHasLinkedDevice(): bool
    {
        return $this->hasLinkedDevice;
    }

    public function setHasUsers(bool $hasUsers): static
    {
        $this->hasUsers = $hasUsers;

        return $this;
    }

    public function getHasUsers(): bool
    {
        return $this->hasUsers;
    }

    public function setId(string $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setImageModulesData(array $imageModulesData): static
    {
        $this->imageModulesData = $imageModulesData;

        return $this;
    }

    public function getImageModulesData(): array
    {
        return $this->imageModulesData;
    }

    public function setInfoModuleData(InfoModuleData $infoModuleData): static
    {
        $this->infoModuleData = $infoModuleData;

        return $this;
    }

    public function getInfoModuleData(): InfoModuleData
    {
        return $this->infoModuleData;
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

    public function setLinkedOfferIds(array $linkedOfferIds): static
    {
        $this->linkedOfferIds = $linkedOfferIds;

        return $this;
    }

    public function getLinkedOfferIds(): array
    {
        return $this->linkedOfferIds;
    }

    public function setLinksModuleData(LinksModuleData $linksModuleData): static
    {
        $this->linksModuleData = $linksModuleData;

        return $this;
    }

    public function getLinksModuleData(): LinksModuleData
    {
        return $this->linksModuleData;
    }

    public function setLocations(array $locations): static
    {
        $this->locations = $locations;

        return $this;
    }

    public function getLocations(): array
    {
        return $this->locations;
    }

    public function setLoyaltyPoints(LoyaltyPoints $loyaltyPoints): static
    {
        $this->loyaltyPoints = $loyaltyPoints;

        return $this;
    }

    public function getLoyaltyPoints(): LoyaltyPoints
    {
        return $this->loyaltyPoints;
    }

    public function setMessages(array $messages): static
    {
        $this->messages = $messages;

        return $this;
    }

    public function getMessages(): array
    {
        return $this->messages;
    }

    public function setSecondaryLoyaltyPoints(LoyaltyPoints $secondaryLoyaltyPoints): static
    {
        $this->secondaryLoyaltyPoints = $secondaryLoyaltyPoints;

        return $this;
    }

    public function getSecondaryLoyaltyPoints(): LoyaltyPoints
    {
        return $this->secondaryLoyaltyPoints;
    }

    public function setSmartTapRedemptionValue(string $smartTapRedemptionValue): static
    {
        $this->smartTapRedemptionValue = $smartTapRedemptionValue;

        return $this;
    }

    public function getSmartTapRedemptionValue(): string
    {
        return $this->smartTapRedemptionValue;
    }

    public function setState(string $state): static
    {
        $this->state = $state;

        return $this;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function setTextModulesData(array $textModulesData): static
    {
        $this->textModulesData = $textModulesData;

        return $this;
    }

    public function getTextModulesData(): array
    {
        return $this->textModulesData;
    }

    public function setValidTimeInterval(TimeInterval $validTimeInterval): static
    {
        $this->validTimeInterval = $validTimeInterval;

        return $this;
    }

    public function getValidTimeInterval(): TimeInterval
    {
        return $this->validTimeInterval;
    }

    public function setVersion(string $version): static
    {
        $this->version = $version;

        return $this;
    }

    public function getVersion(): string
    {
        return $this->version;
    }
}
