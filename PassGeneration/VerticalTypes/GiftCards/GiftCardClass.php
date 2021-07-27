<?php

namespace PassGeneration\VerticalTypes\GiftCards;

use PassGeneration\DataTypes\CallbackOptions;
use PassGeneration\DataTypes\ClassTemplateInfo;
use PassGeneration\DataTypes\Images\Image as GoogleImage;
use PassGeneration\DataTypes\Uri;
use PassGeneration\DataTypes\Images\ImageModuleData;
use PassGeneration\DataTypes\InfoModuleData;
use PassGeneration\DataTypes\LinksModuleData;
use PassGeneration\DataTypes\LocalizedString;
use PassGeneration\DataTypes\LatLongPoint;
use PassGeneration\DataTypes\Message as GoogleMessage;
use PassGeneration\DataTypes\Review as GoogleReview;
use PassGeneration\DataTypes\TextModuleData;
use Google\Collection as GoogleCollection;

class GiftCardClass extends GoogleCollection
{
    /**
     * @var string|null
     */
    protected $collection_key = 'textModulesData';
    /**
     * @var bool|null
     */
    public bool|null $allowBarcodeRedemption = null;
    /**
     * @var bool|null
     */
    public bool|null $allowMultipleUsersPerObject = null;
    /**
     * @var CallbackOptions|null
     */
    public CallbackOptions|null $callbackOptions = null;
    /**
     * @var string|null
     */
    public string|null $cardNumberLabel = null;
    /**
     * @var ClassTemplateInfo|null
     */
    public ClassTemplateInfo|null $classTemplateInfo = null;
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
    public string|null $eventNumberLabel = null;
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
     * @var LocalizedString|null
     */
    public LocalizedString|null $localizedCardNumberLabel = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $localizedEventNumberLabel = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $localizedIssuerName = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $localizedMerchantName = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString$localizedPinLabel;
    /**
     * @var LatLongPoint[]|null
     */
    public array|null $locations = null;
    /**
     * @var string|null
     */
    public string|null $merchantName = null;
    /**
     * @var GoogleMessage[]|null
     */
    public array|null $messages = null;
    /**
     * @var string|null
     */
    public string|null $multipleDevicesAndHoldersAllowedStatus = null;
    /**
     * @var string|null
     */
    public string|null $pinLabel = null;
    /**
     * @var GoogleImage|null
     */
    public GoogleImage|null $programLogo = null;
    /**
     * @var mixed
     */
    public mixed $redemptionIssuers = null;
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

    public function setAllowBarcodeRedemption(bool $allowBarcodeRedemption): static
    {
        $this->allowBarcodeRedemption = $allowBarcodeRedemption;

        return $this;
    }

    public function getAllowBarcodeRedemption(): bool
    {
        return $this->allowBarcodeRedemption;
    }

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

    public function setCardNumberLabel(string $cardNumberLabel): static
    {
        $this->cardNumberLabel = $cardNumberLabel;

        return $this;
    }

    public function getCardNumberLabel(): string
    {
        return $this->cardNumberLabel;
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

    public function setEnableSmartTap(bool $enableSmartTap): static
    {
        $this->enableSmartTap = $enableSmartTap;

        return $this;
    }

    public function getEnableSmartTap(): bool
    {
        return $this->enableSmartTap;
    }

    public function setEventNumberLabel(string $eventNumberLabel): static
    {
        $this->eventNumberLabel = $eventNumberLabel;

        return $this;
    }

    public function getEventNumberLabel(): string
    {
        return $this->eventNumberLabel;
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

    public function setLocalizedCardNumberLabel(LocalizedString $localizedCardNumberLabel): static
    {
        $this->localizedCardNumberLabel = $localizedCardNumberLabel;

        return $this;
    }

    public function getLocalizedCardNumberLabel(): LocalizedString
    {
        return $this->localizedCardNumberLabel;
    }

    public function setLocalizedEventNumberLabel(LocalizedString $localizedEventNumberLabel): static
    {
        $this->localizedEventNumberLabel = $localizedEventNumberLabel;

        return $this;
    }

    public function getLocalizedEventNumberLabel(): LocalizedString
    {
        return $this->localizedEventNumberLabel;
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

    public function setLocalizedMerchantName(LocalizedString $localizedMerchantName): static
    {
        $this->localizedMerchantName = $localizedMerchantName;

        return $this;
    }

    public function getLocalizedMerchantName(): LocalizedString
    {
        return $this->localizedMerchantName;
    }

    public function setLocalizedPinLabel(LocalizedString $localizedPinLabel): static
    {
        $this->localizedPinLabel = $localizedPinLabel;

        return $this;
    }

    public function getLocalizedPinLabel(): LocalizedString
    {
        return $this->localizedPinLabel;
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

    public function setMerchantName(string $merchantName): static
    {
        $this->merchantName = $merchantName;

        return $this;
    }

    public function getMerchantName(): string
    {
        return $this->merchantName;
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

    public function setPinLabel(string $pinLabel): static
    {
        $this->pinLabel = $pinLabel;

        return $this;
    }

    public function getPinLabel(): string
    {
        return $this->pinLabel;
    }

    public function setProgramLogo(GoogleImage $programLogo): static
    {
        $this->programLogo = $programLogo;

        return $this;
    }

    public function getProgramLogo(): GoogleImage
    {
        return $this->programLogo;
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
