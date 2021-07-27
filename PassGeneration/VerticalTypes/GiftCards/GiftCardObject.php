<?php

namespace PassGeneration\VerticalTypes\GiftCards;

use PassGeneration\DataTypes\AppLinkData\AppLinkData;
use PassGeneration\DataTypes\Money as GoogleMoney;
use PassGeneration\DataTypes\DateTime as GoogleDateTime;
use PassGeneration\DataTypes\Barcodes\Barcode;
use PassGeneration\DataTypes\Images\ImageModuleData;
use PassGeneration\DataTypes\InfoModuleData;
use PassGeneration\DataTypes\LinksModuleData;
use PassGeneration\DataTypes\LatLongPoint;
use PassGeneration\DataTypes\Message as GoogleMessage;
use PassGeneration\DataTypes\TextModuleData;
use PassGeneration\DataTypes\TimeInterval;
use Google\Collection as GoogleCollection;

class GiftCardObject extends GoogleCollection
{
    /**
     * @var string|null
     */
    protected $collection_key = 'textModulesData';
    /**
     * @var AppLinkData|null
     */
    public AppLinkData|null $appLinkData = null;
    /**
     * @var GoogleMoney|null
     */
    public GoogleMoney|null $balance = null;
    /**
     * @var GoogleDateTime|null
     */
    public GoogleDateTime|null $balanceUpdateTime = null;
    /**
     * @var Barcode|null
     */
    public Barcode|null $barcode = null;
    /**
     * @var string|null
     */
    public string|null $cardNumber = null;
    /**
     * @var string|null
     */
    public string|null $classId = null;
    /**
     * @var GiftCardClass|null
     */
    public GiftCardClass|null $classReference = null;
    /**
     * @var bool|null
     */
    public bool|null $disableExpirationNotification = null;
    /**
     * @var string|null
     */
    public string|null $eventNumber = null;
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
     * @var ImageModuleData|null[]
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
     * @var LinksModuleData|null
     */
    public LinksModuleData|null $linksModuleData = null;
    /**
     * @var LatLongPoint|null[]
     */
    public array|null $locations = null;
    /**
     * @var GoogleMessage|null[]
     */
    public array|null $messages = null;
    /**
     * @var string|null
     */
    public string|null $pin = null;
    /**
     * @var string|null
     */
    public string|null $smartTapRedemptionValue = null;
    /**
     * @var string|null
     */
    public string|null $state = null;
    /**
     * @var TextModuleData|null[]
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

    public function setAppLinkData(AppLinkData $appLinkData): static
    {
        $this->appLinkData = $appLinkData;

        return $this;
    }

    public function getAppLinkData(): AppLinkData
    {
        return $this->appLinkData;
    }

    public function setBalance(GoogleMoney $balance): static
    {
        $this->balance = $balance;

        return $this;
    }

    public function getBalance(): GoogleMoney
    {
        return $this->balance;
    }

    public function setBalanceUpdateTime(GoogleDateTime $balanceUpdateTime): static
    {
        $this->balanceUpdateTime = $balanceUpdateTime;

        return $this;
    }

    public function getBalanceUpdateTime(): GoogleDateTime
    {
        return $this->balanceUpdateTime;
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

    public function setCardNumber(string $cardNumber): static
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    public function getCardNumber(): string
    {
        return $this->cardNumber;
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

    public function setClassReference(GiftCardClass $classReference): static
    {
        $this->classReference = $classReference;

        return $this;
    }

    public function getClassReference(): GiftCardClass
    {
        return $this->classReference;
    }

    public function setDisableExpirationNotification(bool $disableExpirationNotification): static
    {
        $this->disableExpirationNotification = $disableExpirationNotification;

        return $this;
    }

    public function getDisableExpirationNotification(): bool
    {
        return $this->disableExpirationNotification;
    }

    public function setEventNumber(string $eventNumber): static
    {
        $this->eventNumber = $eventNumber;

        return $this;
    }

    public function getEventNumber(): string
    {
        return $this->eventNumber;
    }

    public function setHasLinkedDevice(string $hasLinkedDevice): static
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

    public function setLinksModuleData(LinksModuleData $linksModuleData): static
    {
        $this->linksModuleData = $linksModuleData;

        return $this;
    }

    public function getLinksModuleData(): LinksModuleData
    {
        return $this->linksModuleData;
    }

    public function setLocations(string $locations): static
    {
        $this->locations = $locations;

        return $this;
    }

    public function getLocations(): array
    {
        return $this->locations;
    }

    public function setMessages(string $messages): static
    {
        $this->messages = $messages;

        return $this;
    }

    public function getMessages(): array
    {
        return $this->messages;
    }

    public function setPin(string $pin): static
    {
        $this->pin = $pin;

        return $this;
    }

    public function getPin(): string
    {
        return $this->pin;
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
