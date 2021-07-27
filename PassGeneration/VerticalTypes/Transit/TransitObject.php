<?php

namespace PassGeneration\VerticalTypes\Transit;

use PassGeneration\DataTypes\AppLinkData\AppLinkData;
use PassGeneration\DataTypes\Barcodes\Barcode;
use PassGeneration\DataTypes\LocalizedString;
use PassGeneration\DataTypes\Images\ImageModuleData;
use PassGeneration\DataTypes\InfoModuleData;
use PassGeneration\DataTypes\LinksModuleData;
use PassGeneration\DataTypes\LatLongPoint;
use PassGeneration\DataTypes\Message as GoogleMessage;
use PassGeneration\DataTypes\PurchaseDetails as PurchaseDetails;
use PassGeneration\DataTypes\TextModuleData;
use PassGeneration\DataTypes\Tickets\TicketLeg;
use PassGeneration\DataTypes\Tickets\TicketRestrictions;
use PassGeneration\DataTypes\TimeInterval;
use Google\Collection as GoogleCollection;

class TransitObject extends GoogleCollection
{
    /**
     * @var string|null
     */
    protected $collection_key = 'ticketLegs';
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
     * @var TransitClass|null
     */
    public TransitClass|null $classReference = null;
    /**
     * @var string|null
     */
    public string|null $concessionCategory = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $customConcessionCategory = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $customTicketStatus = null;
    /**
     * @var string|null
     */
    public string|null $disableExpirationNotification = null;
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
    public string|null $hexBackgroundColor = null;
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
     * @var LinksModuleData|null
     */
    public LinksModuleData|null $linksModuleData = null;
    /**
     * @var LatLongPoint[]|null
     */
    public array|null $locations = null;
    /**
     * @var GoogleMessage[]|null
     */
    public array|null $messages = null;
    /**
     * @var string|null
     */
    public string|null $passengerNames = null;
    /**
     * @var string|null
     */
    public string|null $passengerType = null;
    /**
     * @var PurchaseDetails|null
     */
    public PurchaseDetails|null $purchaseDetails = null;
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
     * @var TicketLeg|null
     */
    public TicketLeg|null $ticketLeg = null;
    /**
     * @var TicketLeg[]|null $ticketLegs
     */
    public array|null $ticketLegs = null;
    /**
     * @var string|null
     */
    public string|null $ticketNumber = null;
    /**
     * @var TicketRestrictions|null
     */
    public TicketRestrictions|null $ticketRestrictions = null;
    /**
     * @var string|null
     */
    public string|null $ticketStatus = null;
    /**
     * @var string|null
     */
    public string|null $tripId = null;
    /**
     * @var string|null
     */
    public string|null $tripType = null;
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

    public function setClassId($classId): static
    {
        $this->classId = $classId;

        return $this;
    }

    public function getClassId(): string
    {
        return $this->classId;
    }

    public function setClassReference(TransitClass $classReference): static
    {
        $this->classReference = $classReference;

        return $this;
    }

    public function getClassReference(): TransitClass
    {
        return $this->classReference;
    }

    public function setConcessionCategory($concessionCategory): static
    {
        $this->concessionCategory = $concessionCategory;

        return $this;
    }

    public function getConcessionCategory(): string
    {
        return $this->concessionCategory;
    }

    public function setCustomConcessionCategory(LocalizedString $customConcessionCategory): static
    {
        $this->customConcessionCategory = $customConcessionCategory;

        return $this;
    }

    public function getCustomConcessionCategory(): LocalizedString
    {
        return $this->customConcessionCategory;
    }

    public function setCustomTicketStatus(LocalizedString $customTicketStatus): static
    {
        $this->customTicketStatus = $customTicketStatus;

        return $this;
    }

    public function getCustomTicketStatus(): LocalizedString
    {
        return $this->customTicketStatus;
    }

    public function setDisableExpirationNotification($disableExpirationNotification): static
    {
        $this->disableExpirationNotification = $disableExpirationNotification;

        return $this;
    }

    public function getDisableExpirationNotification(): string
    {
        return $this->disableExpirationNotification;
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

    public function setHasUsers($hasUsers): static
    {
        $this->hasUsers = $hasUsers;

        return $this;
    }

    public function getHasUsers(): bool
    {
        return $this->hasUsers;
    }

    public function setHexBackgroundColor($hexBackgroundColor): static
    {
        $this->hexBackgroundColor = $hexBackgroundColor;

        return $this;
    }

    public function getHexBackgroundColor(): string
    {
        return $this->hexBackgroundColor;
    }

    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setImageModulesData($imageModulesData): static
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

    public function setLinksModuleData(LinksModuleData $linksModuleData): static
    {
        $this->linksModuleData = $linksModuleData;

        return $this;
    }

    public function getLinksModuleData(): LinksModuleData
    {
        return $this->linksModuleData;
    }

    public function setLocations($locations): static
    {
        $this->locations = $locations;

        return $this;
    }

    public function getLocations(): array
    {
        return $this->locations;
    }

    public function setMessages($messages): static
    {
        $this->messages = $messages;

        return $this;
    }

    public function getMessages(): array
    {
        return $this->messages;
    }

    public function setPassengerNames($passengerNames): static
    {
        $this->passengerNames = $passengerNames;

        return $this;
    }

    public function getPassengerNames(): string
    {
        return $this->passengerNames;
    }

    public function setPassengerType($passengerType): static
    {
        $this->passengerType = $passengerType;

        return $this;
    }

    public function getPassengerType(): string
    {
        return $this->passengerType;
    }

    public function setPurchaseDetails(PurchaseDetails $purchaseDetails): static
    {
        $this->purchaseDetails = $purchaseDetails;

        return $this;
    }

    public function getPurchaseDetails(): PurchaseDetails
    {
        return $this->purchaseDetails;
    }

    public function setSmartTapRedemptionValue($smartTapRedemptionValue): static
    {
        $this->smartTapRedemptionValue = $smartTapRedemptionValue;

        return $this;
    }

    public function getSmartTapRedemptionValue(): string
    {
        return $this->smartTapRedemptionValue;
    }

    public function setState($state): static
    {
        $this->state = $state;

        return $this;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function setTextModulesData($textModulesData): static
    {
        $this->textModulesData = $textModulesData;

        return $this;
    }

    public function getTextModulesData(): array
    {
        return $this->textModulesData;
    }

    public function setTicketLeg(TicketLeg $ticketLeg): static
    {
        $this->ticketLeg = $ticketLeg;

        return $this;
    }

    public function getTicketLeg(): TicketLeg
    {
        return $this->ticketLeg;
    }

    public function setTicketLegs($ticketLegs): static
    {
        $this->ticketLegs = $ticketLegs;

        return $this;
    }

    public function getTicketLegs(): array
    {
        return $this->ticketLegs;
    }

    public function setTicketNumber($ticketNumber): static
    {
        $this->ticketNumber = $ticketNumber;

        return $this;
    }

    public function getTicketNumber(): string
    {
        return $this->ticketNumber;
    }

    public function setTicketRestrictions(TicketRestrictions $ticketRestrictions): static
    {
        $this->ticketRestrictions = $ticketRestrictions;

        return $this;
    }

    public function getTicketRestrictions(): TicketRestrictions
    {
        return $this->ticketRestrictions;
    }

    public function setTicketStatus($ticketStatus): static
    {
        $this->ticketStatus = $ticketStatus;

        return $this;
    }

    public function getTicketStatus(): string
    {
        return $this->ticketStatus;
    }

    public function setTripId($tripId): static
    {
        $this->tripId = $tripId;

        return $this;
    }

    public function getTripId(): string
    {
        return $this->tripId;
    }

    public function setTripType($tripType): static
    {
        $this->tripType = $tripType;

        return $this;
    }

    public function getTripType(): string
    {
        return $this->tripType;
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

    public function setVersion($version): static
    {
        $this->version = $version;

        return $this;
    }

    public function getVersion(): string
    {
        return $this->version;
    }
}
