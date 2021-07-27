<?php

namespace PassGeneration\VerticalTypes\Transit;

use PassGeneration\DataTypes\CallbackOptions;
use PassGeneration\DataTypes\ClassTemplateInfo;
use PassGeneration\DataTypes\LocalizedString;
use PassGeneration\DataTypes\Images\Image as GoogleImage;
use PassGeneration\DataTypes\Uri;
use PassGeneration\DataTypes\Images\ImageModuleData;
use PassGeneration\DataTypes\InfoModuleData;
use PassGeneration\DataTypes\LinksModuleData;
use PassGeneration\DataTypes\LatLongPoint;
use PassGeneration\DataTypes\Message as GoogleMessage;
use PassGeneration\DataTypes\Review as GoogleReview;
use PassGeneration\DataTypes\TextModuleData;
use Google\Collection as GoogleCollection;

class TransitClass extends GoogleCollection
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
     * @var LocalizedString|null
     */
    public LocalizedString|null $customCarriageLabel = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $customCoachLabel = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $customConcessionCategoryLabel = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $customConfirmationCodeLabel = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $customDiscountMessageLabel = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $customFareClassLabel = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $customFareNameLabel = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $customOtherRestrictionsLabel = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $customPlatformLabel = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $customPurchaseFaceValueLabel = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $customPurchasePriceLabel = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $customPurchaseReceiptNumberLabel = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $customRouteRestrictionsDetailsLabel = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $customRouteRestrictionsLabel = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $customSeatLabel = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $customTicketNumberLabel = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $customTimeRestrictionsLabel = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $customTransitTerminusNameLabel = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $customZoneLabel = null;
    /**
     * @var bool|null
     */
    public bool|null $enableSingleLegItinerary = null;
    /**
     * @var bool|null
     */
    public bool|null $enableSmartTap = null;
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
    public string|null $issuerName = null;
    /**
     * @var string|null
     */
    public string|null $languageOverride = null;
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
    public array|null $locations = null;
    /**
     * @var GoogleImage|null
     */
    public GoogleImage|null $logo = null;
    /**
     * @var GoogleMessage|null[]
     */
    public array|null $messages = null;
    /**
     * @var string|null
     */
    public string|null $multipleDevicesAndHoldersAllowedStatus = null;
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
     * @var TextModuleData|null[]
     */
    public array|null $textModulesData = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $transitOperatorName = null;
    /**
     * @var string|null
     */
    public string|null $transitType = null;
    /**
     * @var string|null
     */
    public string|null $version = null;
    /**
     * @var GoogleImage|null
     */
    public GoogleImage|null $watermark = null;
    /**
     * @var GoogleImage|null
     */
    public GoogleImage|null $wordMark = null;

    public function setAllowMultipleUsersPerObject($allowMultipleUsersPerObject): static
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

    public function setCountryCode($countryCode): static
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function setCustomCarriageLabel(LocalizedString $customCarriageLabel): static
    {
        $this->customCarriageLabel = $customCarriageLabel;

        return $this;
    }

    public function getCustomCarriageLabel(): LocalizedString
    {
        return $this->customCarriageLabel;
    }

    public function setCustomCoachLabel(LocalizedString $customCoachLabel): static
    {
        $this->customCoachLabel = $customCoachLabel;

        return $this;
    }

    public function getCustomCoachLabel(): LocalizedString
    {
        return $this->customCoachLabel;
    }

    public function setCustomConcessionCategoryLabel(LocalizedString $customConcessionCategoryLabel): static
    {
        $this->customConcessionCategoryLabel = $customConcessionCategoryLabel;

        return $this;
    }

    public function getCustomConcessionCategoryLabel(): LocalizedString
    {
        return $this->customConcessionCategoryLabel;
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

    public function setCustomDiscountMessageLabel(LocalizedString $customDiscountMessageLabel): static
    {
        $this->customDiscountMessageLabel = $customDiscountMessageLabel;

        return $this;
    }

    public function getCustomDiscountMessageLabel(): LocalizedString
    {
        return $this->customDiscountMessageLabel;
    }

    public function setCustomFareClassLabel(LocalizedString $customFareClassLabel): static
    {
        $this->customFareClassLabel = $customFareClassLabel;

        return $this;
    }

    public function getCustomFareClassLabel(): LocalizedString
    {
        return $this->customFareClassLabel;
    }

    public function setCustomFareNameLabel(LocalizedString $customFareNameLabel): static
    {
        $this->customFareNameLabel = $customFareNameLabel;

        return $this;
    }

    public function getCustomFareNameLabel(): LocalizedString
    {
        return $this->customFareNameLabel;
    }

    public function setCustomOtherRestrictionsLabel(LocalizedString $customOtherRestrictionsLabel): static
    {
        $this->customOtherRestrictionsLabel = $customOtherRestrictionsLabel;

        return $this;
    }

    public function getCustomOtherRestrictionsLabel(): LocalizedString
    {
        return $this->customOtherRestrictionsLabel;
    }

    public function setCustomPlatformLabel(LocalizedString $customPlatformLabel): static
    {
        $this->customPlatformLabel = $customPlatformLabel;

        return $this;
    }

    public function getCustomPlatformLabel(): LocalizedString
    {
        return $this->customPlatformLabel;
    }

    public function setCustomPurchaseFaceValueLabel(LocalizedString $customPurchaseFaceValueLabel): static
    {
        $this->customPurchaseFaceValueLabel = $customPurchaseFaceValueLabel;

        return $this;
    }

    public function getCustomPurchaseFaceValueLabel(): LocalizedString
    {
        return $this->customPurchaseFaceValueLabel;
    }

    public function setCustomPurchasePriceLabel(LocalizedString $customPurchasePriceLabel): static
    {
        $this->customPurchasePriceLabel = $customPurchasePriceLabel;

        return $this;
    }

    public function getCustomPurchasePriceLabel(): LocalizedString
    {
        return $this->customPurchasePriceLabel;
    }

    public function setCustomPurchaseReceiptNumberLabel(LocalizedString $customPurchaseReceiptNumberLabel): static
    {
        $this->customPurchaseReceiptNumberLabel = $customPurchaseReceiptNumberLabel;

        return $this;
    }

    public function getCustomPurchaseReceiptNumberLabel(): LocalizedString
    {
        return $this->customPurchaseReceiptNumberLabel;
    }

    public function setCustomRouteRestrictionsDetailsLabel(LocalizedString $customRouteRestrictionsDetailsLabel): static
    {
        $this->customRouteRestrictionsDetailsLabel = $customRouteRestrictionsDetailsLabel;

        return $this;
    }

    public function getCustomRouteRestrictionsDetailsLabel(): LocalizedString
    {
        return $this->customRouteRestrictionsDetailsLabel;
    }

    public function setCustomRouteRestrictionsLabel(LocalizedString $customRouteRestrictionsLabel): static
    {
        $this->customRouteRestrictionsLabel = $customRouteRestrictionsLabel;

        return $this;
    }

    public function getCustomRouteRestrictionsLabel(): LocalizedString
    {
        return $this->customRouteRestrictionsLabel;
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

    public function setCustomTicketNumberLabel(LocalizedString $customTicketNumberLabel): static
    {
        $this->customTicketNumberLabel = $customTicketNumberLabel;

        return $this;
    }

    public function getCustomTicketNumberLabel(): LocalizedString
    {
        return $this->customTicketNumberLabel;
    }

    public function setCustomTimeRestrictionsLabel(LocalizedString $customTimeRestrictionsLabel): static
    {
        $this->customTimeRestrictionsLabel = $customTimeRestrictionsLabel;

        return $this;
    }

    public function getCustomTimeRestrictionsLabel(): LocalizedString
    {
        return $this->customTimeRestrictionsLabel;
    }

    public function setCustomTransitTerminusNameLabel(LocalizedString $customTransitTerminusNameLabel): static
    {
        $this->customTransitTerminusNameLabel = $customTransitTerminusNameLabel;

        return $this;
    }

    public function getCustomTransitTerminusNameLabel(): LocalizedString
    {
        return $this->customTransitTerminusNameLabel;
    }

    public function setCustomZoneLabel(LocalizedString $customZoneLabel): static
    {
        $this->customZoneLabel = $customZoneLabel;

        return $this;
    }

    public function getCustomZoneLabel(): LocalizedString
    {
        return $this->customZoneLabel;
    }

    public function setEnableSingleLegItinerary($enableSingleLegItinerary): static
    {
        $this->enableSingleLegItinerary = $enableSingleLegItinerary;

        return $this;
    }

    public function getEnableSingleLegItinerary(): bool
    {
        return $this->enableSingleLegItinerary;
    }

    public function setEnableSmartTap($enableSmartTap): static
    {
        $this->enableSmartTap = $enableSmartTap;

        return $this;
    }

    public function getEnableSmartTap(): bool
    {
        return $this->enableSmartTap;
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

    public function setHexBackgroundColor($hexBackgroundColor): static
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

    public function setIssuerName($issuerName): static
    {
        $this->issuerName = $issuerName;

        return $this;
    }

    public function getIssuerName(): string
    {
        return $this->issuerName;
    }

    public function setLanguageOverride($languageOverride): static
    {
        $this->languageOverride = $languageOverride;

        return $this;
    }

    public function getLanguageOverride(): string
    {
        return $this->languageOverride;
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

    public function setLocations($locations): static
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

    public function setMessages($messages): static
    {
        $this->messages = $messages;

        return $this;
    }

    public function getMessages(): array
    {
        return $this->messages;
    }

    public function setMultipleDevicesAndHoldersAllowedStatus($multipleDevicesAndHoldersAllowedStatus): static
    {
        $this->multipleDevicesAndHoldersAllowedStatus = $multipleDevicesAndHoldersAllowedStatus;

        return $this;
    }

    public function getMultipleDevicesAndHoldersAllowedStatus(): string
    {
        return $this->multipleDevicesAndHoldersAllowedStatus;
    }

    public function setRedemptionIssuers($redemptionIssuers): static
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

    public function getReview()
    {
        return $this->review;
    }

    public function setReviewStatus($reviewStatus): static
    {
        $this->reviewStatus = $reviewStatus;

        return $this;
    }

    public function getReviewStatus(): string
    {
        return $this->reviewStatus;
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

    public function setTransitOperatorName(LocalizedString $transitOperatorName): static
    {
        $this->transitOperatorName = $transitOperatorName;

        return $this;
    }

    public function getTransitOperatorName(): LocalizedString
    {
        return $this->transitOperatorName;
    }

    public function setTransitType($transitType): static
    {
        $this->transitType = $transitType;

        return $this;
    }

    public function getTransitType(): string
    {
        return $this->transitType;
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

    public function setWatermark(GoogleImage $watermark): static
    {
        $this->watermark = $watermark;

        return $this;
    }

    public function getWatermark(): GoogleImage
    {
        return $this->watermark;
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
