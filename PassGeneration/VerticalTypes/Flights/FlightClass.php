<?php

namespace PassGeneration\VerticalTypes\Flights;

use PassGeneration\DataTypes\CallbackOptions;
use PassGeneration\DataTypes\ClassTemplateInfo;
use PassGeneration\VerticalTypes\Flight\AirportInfo;
use PassGeneration\DataTypes\Images\Image as GoogleImage;
use PassGeneration\DataTypes\Uri;
use PassGeneration\DataTypes\Images\ImageModuleData;
use PassGeneration\DataTypes\InfoModuleData;
use PassGeneration\DataTypes\LinksModuleData;
use PassGeneration\DataTypes\LocalizedString;
use PassGeneration\DataTypes\LatLongPoint;
use PassGeneration\DataTypes\Message as GoogleMessage;
use PassGeneration\DataTypes\TextModuleData;
use PassGeneration\DataTypes\Review as GoogleReview;
use Google\Collection as GoogleCollection;

class FlightClass extends GoogleCollection
{
    /**
     * @var string|null
     */
    protected $collection_key = 'textModulesData';
    /**
     * @var bool|null
     */
    public bool|null $allowMultipleUsersPerObject = null;
    /**
     * @var BoardingAndSeatingPolicy|null
     */
    public BoardingAndSeatingPolicy|null $boardingAndSeatingPolicy = null;
    /**
     * @var CallbackOptions|null
     */
    public CallbackOptions|null $callbackOptions = null;
    /**
     * @var ClassTemplateInfo|null
     */
    public ClassTemplateInfo|null $classTemplateInfo = null;
    /**
     * @var string|null
     */
    public string|null $countryCode = null;
    /**
     * @var AirportInfo|null
     */
    public AirportInfo|null $destination = null;
    /**
     * @var bool|null
     */
    public bool|null $enableSmartTap = null;
    /**
     * @var FlightHeader|null
     */
    public FlightHeader|null $flightHeader = null;
    /**
     * @var string|null
     */
    public string|null $flightStatus = null;
    /**
     * @var GoogleImage|null
     */
    public GoogleImage|null $heroImage = null;
    /**
     * @var string|null
     */
    public string|null $hexBackgroundColor = null;
    /**
     * @var Uri|null
     */
    public Uri|null $homepageUri = null;
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
    public string|null $issuerName = null;
    /**
     * @var string|null
     */
    public string|null $kind = null;
    /**
     * @var LinksModuleData|null
     */
    public LinksModuleData|null $linksModuleData = null;
    /**
     * @var string|null
     */
    public string|null $localBoardingDateTime = null;
    /**
     * @var string|null
     */
    public string|null $localEstimatedOrActualArrivalDateTime = null;
    /**
     * @var string|null
     */
    public string|null $localEstimatedOrActualDepartureDateTime = null;
    /**
     * @var string|null
     */
    public string|null $localGateClosingDateTime = null;
    /**
     * @var string|null
     */
    public string|null $localScheduledArrivalDateTime = null;
    /**
     * @var string|null
     */
    public string|null $localScheduledDepartureDateTime = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $localizedIssuerName = null;
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
    public string|null $multipleDevicesAndHoldersAllowedStatus = null;
    /**
     * @var AirportInfo|null
     */
    public AirportInfo|null $origin = null;
    /**
     * @var array|null
     */
    public array|null $redemptionIssuers = null;
    /**
     * @var GoogleReview|null
     */
    public GoogleReview|null $review = null;
    /**
     * @var string|null
     */
    public string|null $reviewStatus = null;
    /**
     * @var TextModuleData[]|null
     */
    public array|null $textModulesData = null;
    /**
     * @var string|null
     */
    public string|null $version = null;
    /**
     * @var GoogleImage|null
     */
    public GoogleImage|null $wordMark = null;

    public function setAllowMultipleUsersPerObject(bool $allowMultipleUsersPerObject): static
    {
        $this->allowMultipleUsersPerObject = $allowMultipleUsersPerObject;

        return $this;
    }

    public function getAllowMultipleUsersPerObject(): bool
    {
        return $this->allowMultipleUsersPerObject;
    }

    public function setBoardingAndSeatingPolicy(BoardingAndSeatingPolicy $boardingAndSeatingPolicy): static
    {
        $this->boardingAndSeatingPolicy = $boardingAndSeatingPolicy;

        return $this;
    }

    public function getBoardingAndSeatingPolicy(): BoardingAndSeatingPolicy
    {
        return $this->boardingAndSeatingPolicy;
    }

    public function setCallbackOptions(CallbackOptions $callbackOptions): static
    {
        $this->callbackOptions = $callbackOptions;

        return $this;
    }

    public function getCallbackOptions(): CallbackOptions
    {
        return $this->callbackOptions;
    }

    public function setClassTemplateInfo(ClassTemplateInfo $classTemplateInfo): static
    {
        $this->classTemplateInfo = $classTemplateInfo;

        return $this;
    }

    public function getClassTemplateInfo(): ClassTemplateInfo
    {
        return $this->classTemplateInfo;
    }

    public function setCountryCode(string $countryCode): static
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function setDestination(AirportInfo $destination): static
    {
        $this->destination = $destination;

        return $this;
    }

    public function getDestination(): AirportInfo
    {
        return $this->destination;
    }

    public function setEnableSmartTap(bool $enableSmartTap): static
    {
        $this->enableSmartTap = $enableSmartTap;

        return $this;
    }

    public function getEnableSmartTap(): bool
    {
        return $this->enableSmartTap;
    }

    public function setFlightHeader(FlightHeader $flightHeader): static
    {
        $this->flightHeader = $flightHeader;

        return $this;
    }

    public function getFlightHeader(): FlightHeader
    {
        return $this->flightHeader;
    }

    public function setFlightStatus(string $flightStatus): static
    {
        $this->flightStatus = $flightStatus;

        return $this;
    }

    public function getFlightStatus(): string
    {
        return $this->flightStatus;
    }

    public function setHeroImage(GoogleImage $heroImage): static
    {
        $this->heroImage = $heroImage;

        return $this;
    }

    public function getHeroImage(): GoogleImage
    {
        return $this->heroImage;
    }

    public function setHexBackgroundColor(string $hexBackgroundColor): static
    {
        $this->hexBackgroundColor = $hexBackgroundColor;

        return $this;
    }

    public function getHexBackgroundColor(): string
    {
        return $this->hexBackgroundColor;
    }

    public function setHomepageUri(Uri $homepageUri): static
    {
        $this->homepageUri = $homepageUri;

        return $this;
    }

    public function getHomepageUri(): Uri
    {
        return $this->homepageUri;
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

    public function setIssuerName(string $issuerName): static
    {
        $this->issuerName = $issuerName;

        return $this;
    }

    public function getIssuerName(): string
    {
        return $this->issuerName;
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

    public function setLocalBoardingDateTime(string $localBoardingDateTime): static
    {
        $this->localBoardingDateTime = $localBoardingDateTime;

        return $this;
    }

    public function getLocalBoardingDateTime(): string
    {
        return $this->localBoardingDateTime;
    }

    public function setLocalEstimatedOrActualArrivalDateTime(string $localEstimatedOrActualArrivalDateTime): static
    {
        $this->localEstimatedOrActualArrivalDateTime = $localEstimatedOrActualArrivalDateTime;

        return $this;
    }

    public function getLocalEstimatedOrActualArrivalDateTime(): string
    {
        return $this->localEstimatedOrActualArrivalDateTime;
    }

    public function setLocalEstimatedOrActualDepartureDateTime(string $localEstimatedOrActualDepartureDateTime): static
    {
        $this->localEstimatedOrActualDepartureDateTime = $localEstimatedOrActualDepartureDateTime;

        return $this;
    }

    public function getLocalEstimatedOrActualDepartureDateTime(): string
    {
        return $this->localEstimatedOrActualDepartureDateTime;
    }

    public function setLocalGateClosingDateTime(string $localGateClosingDateTime): static
    {
        $this->localGateClosingDateTime = $localGateClosingDateTime;

        return $this;
    }

    public function getLocalGateClosingDateTime(): string
    {
        return $this->localGateClosingDateTime;
    }

    public function setLocalScheduledArrivalDateTime(string $localScheduledArrivalDateTime): static
    {
        $this->localScheduledArrivalDateTime = $localScheduledArrivalDateTime;

        return $this;
    }

    public function getLocalScheduledArrivalDateTime(): string
    {
        return $this->localScheduledArrivalDateTime;
    }

    public function setLocalScheduledDepartureDateTime(string $localScheduledDepartureDateTime): static
    {
        $this->localScheduledDepartureDateTime = $localScheduledDepartureDateTime;

        return $this;
    }

    public function getLocalScheduledDepartureDateTime(): string
    {
        return $this->localScheduledDepartureDateTime;
    }

    public function setLocalizedIssuerName(LocalizedString $localizedIssuerName): static
    {
        $this->localizedIssuerName = $localizedIssuerName;

        return $this;
    }

    public function getLocalizedIssuerName(): LocalizedString
    {
        return $this->localizedIssuerName;
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

    public function setMultipleDevicesAndHoldersAllowedStatus(string $multipleDevicesAndHoldersAllowedStatus): static
    {
        $this->multipleDevicesAndHoldersAllowedStatus = $multipleDevicesAndHoldersAllowedStatus;

        return $this;
    }

    public function getMultipleDevicesAndHoldersAllowedStatus(): string
    {
        return $this->multipleDevicesAndHoldersAllowedStatus;
    }

    public function setOrigin(AirportInfo $origin): static
    {
        $this->origin = $origin;

        return $this;
    }

    public function getOrigin(): AirportInfo
    {
        return $this->origin;
    }

    public function setRedemptionIssuers(array $redemptionIssuers): static
    {
        $this->redemptionIssuers = $redemptionIssuers;

        return $this;
    }

    public function getRedemptionIssuers(): array
    {
        return $this->redemptionIssuers;
    }

    public function setReview(GoogleReview $review): static
    {
        $this->review = $review;

        return $this;
    }

    public function getReview(): GoogleReview
    {
        return $this->review;
    }

    public function setReviewStatus(string $reviewStatus): static
    {
        $this->reviewStatus = $reviewStatus;

        return $this;
    }

    public function getReviewStatus(): string
    {
        return $this->reviewStatus;
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

    public function setVersion(string $version): static
    {
        $this->version = $version;

        return $this;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function setWordMark(GoogleImage $wordMark): static
    {
        $this->wordMark = $wordMark;

        return $this;
    }

    public function getWordMark(): GoogleImage
    {
        return $this->wordMark;
    }
}
