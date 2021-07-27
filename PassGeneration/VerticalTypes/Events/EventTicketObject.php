<?php

namespace PassGeneration\VerticalTypes\Events;

use PassGeneration\DataTypes\AppLinkData\AppLinkData;
use PassGeneration\DataTypes\Barcodes\Barcode;
use PassGeneration\DataTypes\Money as GoogleMoney;
use PassGeneration\DataTypes\GroupingInfo;
use PassGeneration\DataTypes\InfoModuleData;
use PassGeneration\DataTypes\LinksModuleData;
use PassGeneration\DataTypes\LatLongPoint;
use PassGeneration\DataTypes\Message as GoogleMessage;
use PassGeneration\DataTypes\TextModuleData;
use PassGeneration\DataTypes\LocalizedString;
use PassGeneration\DataTypes\TimeInterval;
use Google\Collection as GoogleCollection;

class EventTicketObject extends GoogleCollection
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
     * @var Barcode|null
     */
    public Barcode|null $barcode = null;
    /**
     * @var string|null
     */
    public string|null $classId = null;
    /**
     * @var EventTicketClass|null
     */
    public EventTicketClass|null $classReference = null;
    /**
     * @var bool|null
     */
    public bool|null $disableExpirationNotification = null;
    /**
     * @var GoogleMoney|null
     */
    public GoogleMoney|null $faceValue = null;
    /**
     * @var GroupingInfo|null
     */
    public GroupingInfo|null $groupingInfo = null;
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
     * @var InfoModuleData|null[]
     */
    public array|null $imageModulesData = null;
    /**
     * @var InfoModuleData|null[]
     */
    public array|null $infoModuleData = null;
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
     * @var LatLongPoint|null[]
     */
    public array|null $locations = null;
    /**
     * @var GoogleMessage|null[]
     */
    public array|null $messages = null;
    /**
     * @var EventReservationInfo|null
     */
    public EventReservationInfo|null $reservationInfo = null;
    /**
     * @var EventSeat|null
     */
    public EventSeat|null $seatInfo = null;
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
     * @var string|null
     */
    public string|null $ticketHolderName = null;
    /**
     * @var string|null
     */
    public string|null $ticketNumber = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $ticketType = null;
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

    public function setClassReference(EventTicketClass $classReference): static
    {
        $this->classReference = $classReference;

        return $this;
    }

    public function getClassReference(): EventTicketClass
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

    public function setFaceValue(GoogleMoney $faceValue): static
    {
        $this->faceValue = $faceValue;

        return $this;
    }

    public function getFaceValue(): GoogleMoney
    {
        return $this->faceValue;
    }

    public function setGroupingInfo(GroupingInfo $groupingInfo): static
    {
        $this->groupingInfo = $groupingInfo;

        return $this;
    }

    public function getGroupingInfo(): GroupingInfo
    {
        return $this->groupingInfo;
    }

    public function setHasLinkedDevice($hasLinkedDevice): static
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

    public function getInfoModuleData(): array
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

    public function setMessages(array $messages): static
    {
        $this->messages = $messages;

        return $this;
    }

    public function getMessages(): array
    {
        return $this->messages;
    }

    public function setReservationInfo(EventReservationInfo $reservationInfo): static
    {
        $this->reservationInfo = $reservationInfo;

        return $this;
    }

    public function getReservationInfo(): EventReservationInfo
    {
        return $this->reservationInfo;
    }

    public function setSeatInfo(EventSeat $seatInfo): static
    {
        $this->seatInfo = $seatInfo;

        return $this;
    }

    public function getSeatInfo(): EventSeat
    {
        return $this->seatInfo;
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

    public function setTicketHolderName(string $ticketHolderName): static
    {
        $this->ticketHolderName = $ticketHolderName;

        return $this;
    }

    public function getTicketHolderName(): string
    {
        return $this->ticketHolderName;
    }

    public function setTicketNumber(string $ticketNumber): static
    {
        $this->ticketNumber = $ticketNumber;

        return $this;
    }

    public function getTicketNumber(): string
    {
        return $this->ticketNumber;
    }

    public function setTicketType(LocalizedString $ticketType): static
    {
        $this->ticketType = $ticketType;

        return $this;
    }

    public function getTicketType(): LocalizedString
    {
        return $this->ticketType;
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
