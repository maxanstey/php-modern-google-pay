<?php

namespace PassGeneration\VerticalTypes\Events;

use PassGeneration\DataTypes\InfoModuleData;
use PassGeneration\DataTypes\LocalizedString;
use PassGeneration\DataTypes\CallbackOptions;
use PassGeneration\DataTypes\ClassTemplateInfo;
use PassGeneration\DataTypes\Images\Image as GoogleImage;
use PassGeneration\DataTypes\Uri;
use PassGeneration\DataTypes\Images\ImageModuleData;
use PassGeneration\DataTypes\LinksModuleData;
use PassGeneration\DataTypes\LatLongPoint;
use PassGeneration\DataTypes\Message as GoogleMessage;
use PassGeneration\DataTypes\Review as GoogleReview;
use PassGeneration\DataTypes\TextModuleData;
use Google\Collection as GoogleCollection;

class EventTicketClass extends GoogleCollection
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
     * @var string|null
     */
    public string|null $confirmationCodeLabel = null;
    /**
     * @var string|null
     */
    public string|null $countryCode = null;
    /**
     * @var bool|null
     */
    public bool|null $enableSmartTap = null;
    /**
     * @var string|null
     */
    public string|null $eventId = null;
    /**
     * @var string|null
     */
    public string|null $gateLabel = null;
    /**
     * @var string|null
     */
    public string|null $hexBackgroundColor = null;
    /**
     * @var string|null
     */
    public string|null $id = null;
    /**
     * @var string|null
     */
    public string|null $issuerName = null;
    /**
     * @var string|null
     */
    public string|null $kind = null;
    /**
     * @var string|null
     */
    public string|null $multipleDevicesAndHoldersAllowedStatus = null;
    /**
     * @var array|null
     */
    public array|null $redemptionIssuers = null;
    /**
     * @var string|null
     */
    public string|null $reviewStatus = null;
    /**
     * @var string|null
     */
    public string|null $rowLabel = null;
    /**
     * @var string|null
     */
    public string|null $seatLabel = null;
    /**
     * @var string|null
     */
    public string|null $sectionLabel = null;
    /**
     * @var string|null
     */
    public string|null $version = null;
    /**
     * @var CallbackOptions|null
     */
    public CallbackOptions|null $callbackOptions = null;
    /**
     * @var ClassTemplateInfo|null
     */
    public ClassTemplateInfo|null $classTemplateInfo = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $customConfirmationCodeLabel = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $customGateLabel = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $customSectionLabel = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $customRowLabel = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $customSeatLabel = null;
    /**
     * @var EventDateTime|null
     */
    public EventDateTime|null $dateTime = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $eventName = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $finePrint = null;
    /**
     * @var GoogleImage|null
     */
    public GoogleImage|null $heroImage = null;
    /**
     * @var Uri|null
     */
    public Uri|null $homepageUri = null;
    /**
     * @var ImageModuleData|null
     */
    public ImageModuleData|null $imageModulesData = null;
    /**
     * @var InfoModuleData|null
     */
    public InfoModuleData|null $infoModuleData = null;
    /**
     * @var LinksModuleData|null
     */
    public LinksModuleData|null $linksModuleData = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $localizedIssuerName = null;
    /**
     * @var LatLongPoint|null[]
     */
    public mixed|null $locations = null;
    /**
     * @var GoogleImage|null
     */
    public GoogleImage|null $logo = null;
    /**
     * @var GoogleMessage|null[]
     */
    public array|null $messages = null;
    /**
     * @var GoogleReview|null
     */
    public GoogleReview|null $review = null;
    /**
     * @var TextModuleData|null
     */
    public TextModuleData|null $textModulesData = null;
    /**
     * @var EventVenue|null
     */
    public EventVenue|null $venue = null;
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

    public function setConfirmationCodeLabel(string $confirmationCodeLabel): static
    {
        $this->confirmationCodeLabel = $confirmationCodeLabel;

        return $this;
    }

    public function getConfirmationCodeLabel(): string
    {
        return $this->confirmationCodeLabel;
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

    public function setCustomConfirmationCodeLabel(LocalizedString $customConfirmationCodeLabel): static
    {
        $this->customConfirmationCodeLabel = $customConfirmationCodeLabel;

        return $this;
    }

    public function getCustomConfirmationCodeLabel(): LocalizedString
    {
        return $this->customConfirmationCodeLabel;
    }

    public function setCustomGateLabel(LocalizedString $customGateLabel): static
    {
        $this->customGateLabel = $customGateLabel;

        return $this;
    }

    public function getCustomGateLabel(): LocalizedString
    {
        return $this->customGateLabel;
    }

    public function setCustomRowLabel(LocalizedString $customRowLabel): static
    {
        $this->customRowLabel = $customRowLabel;

        return $this;
    }

    public function getCustomRowLabel(): LocalizedString
    {
        return $this->customRowLabel;
    }

    public function setCustomSeatLabel(LocalizedString $customSeatLabel): static
    {
        $this->customSeatLabel = $customSeatLabel;

        return $this;
    }

    public function getCustomSeatLabel(): LocalizedString
    {
        return $this->customSeatLabel;
    }

    public function setCustomSectionLabel(LocalizedString $customSectionLabel): static
    {
        $this->customSectionLabel = $customSectionLabel;

        return $this;
    }

    public function getCustomSectionLabel(): LocalizedString
    {
        return $this->customSectionLabel;
    }

    public function setDateTime(EventDateTime $dateTime): static
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    public function getDateTime(): EventDateTime
    {
        return $this->dateTime;
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

    public function setEventId(string $eventId): static
    {
        $this->eventId = $eventId;

        return $this;
    }

    public function getEventId(): string
    {
        return $this->eventId;
    }

    public function setEventName(LocalizedString $eventName): static
    {
        $this->eventName = $eventName;

        return $this;
    }

    public function getEventName(): LocalizedString
    {
        return $this->eventName;
    }

    public function setFinePrint(LocalizedString $finePrint): static
    {
        $this->finePrint = $finePrint;

        return $this;
    }

    public function getFinePrint(): LocalizedString
    {
        return $this->finePrint;
    }

    public function setGateLabel(string $gateLabel): static
    {
        $this->gateLabel = $gateLabel;

        return $this;
    }

    public function getGateLabel(): string
    {
        return $this->gateLabel;
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

    public function setImageModulesData(ImageModuleData $imageModulesData): static
    {
        $this->imageModulesData = $imageModulesData;

        return $this;
    }

    public function getImageModulesData(): ImageModuleData
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

    public function setLogo(GoogleImage $logo): static
    {
        $this->logo = $logo;

        return $this;
    }

    public function getLogo(): GoogleImage
    {
        return $this->logo;
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

    public function setRedemptionIssuers(mixed $redemptionIssuers): static
    {
        $this->redemptionIssuers = $redemptionIssuers;

        return $this;
    }

    public function getRedemptionIssuers(): mixed
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

    public function setRowLabel(string $rowLabel): static
    {
        $this->rowLabel = $rowLabel;

        return $this;
    }

    public function getRowLabel(): string
    {
        return $this->rowLabel;
    }

    public function setSeatLabel(string $seatLabel): static
    {
        $this->seatLabel = $seatLabel;

        return $this;
    }

    public function getSeatLabel(): string
    {
        return $this->seatLabel;
    }

    public function setSectionLabel(string $sectionLabel): static
    {
        $this->sectionLabel = $sectionLabel;

        return $this;
    }

    public function getSectionLabel(): string
    {
        return $this->sectionLabel;
    }

    public function setTextModulesData(TextModuleData $textModulesData): static
    {
        $this->textModulesData = $textModulesData;

        return $this;
    }

    public function getTextModulesData(): TextModuleData
    {
        return $this->textModulesData;
    }

    public function setVenue(EventVenue $venue): static
    {
        $this->venue = $venue;

        return $this;
    }

    public function getVenue(): EventVenue
    {
        return $this->venue;
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
