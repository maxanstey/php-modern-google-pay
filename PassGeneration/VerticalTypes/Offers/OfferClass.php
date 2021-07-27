<?php

namespace PassGeneration\VerticalTypes\Offers;

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

class OfferClass extends GoogleCollection
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
     * @var string|null
     */
    public string|null $details = null;
    /**
     * @var bool|null
     */
    public bool|null $enableSmartTap = null;
    /**
     * @var string|null
     */
    public string|null $finePrint = null;
    /**
     * @var Uri|null
     */
    public Uri|null $helpUri = null;
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
     * @var ImageModuleData[]|null|null
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
    public LocalizedString|null $localizedDetails = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $localizedFinePrint = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $localizedIssuerName = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $localizedProvider = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $localizedShortTitle = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $localizedTitle = null;
    /**
     * @var LatLongPoint[]|null|null
     */
    public array|null $locations = null;
    /**
     * @var GoogleMessage[]|null|null
     */
    public array|null $messages = null;
    /**
     * @var string|null
     */
    public string|null $multipleDevicesAndHoldersAllowedStatus = null;
    /**
     * @var string|null
     */
    public string|null $provider = null;
    /**
     * @var string|null
     */
    public string|null $redemptionChannel = null;
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
     * @var string|null
     */
    public string|null $shortTitle = null;
    /**
     * @var TextModuleData[]|null|null
     */
    public array|null $textModulesData = null;
    /**
     * @var string|null
     */
    public string|null $title = null;
    /**
     * @var GoogleImage|null|GoogleImage[]|null
     */
    public GoogleImage|array|null $titleImage = null;
    /**
     * @var string|null
     */
    public string|null $version = null;
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

    public function setCountryCode(string $countryCode): static
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function setDetails(string $details): static
    {
        $this->details = $details;

        return $this;
    }

    public function getDetails(): string
    {
        return $this->details;
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

    public function setFinePrint(string $finePrint): static
    {
        $this->finePrint = $finePrint;

        return $this;
    }

    public function getFinePrint(): string
    {
        return $this->finePrint;
    }

    public function setHelpUri(Uri $helpUri): static
    {
        $this->helpUri = $helpUri;

        return $this;
    }

    public function getHelpUri(): Uri
    {
        return $this->helpUri;
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

    public function setLocalizedDetails(LocalizedString $localizedDetails): static
    {
        $this->localizedDetails = $localizedDetails;

        return $this;
    }

    public function getLocalizedDetails(): LocalizedString
    {
        return $this->localizedDetails;
    }

    public function setLocalizedFinePrint(LocalizedString $localizedFinePrint): static
    {
        $this->localizedFinePrint = $localizedFinePrint;

        return $this;
    }

    public function getLocalizedFinePrint(): LocalizedString
    {
        return $this->localizedFinePrint;
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

    public function setLocalizedProvider(LocalizedString $localizedProvider): static
    {
        $this->localizedProvider = $localizedProvider;

        return $this;
    }

    public function getLocalizedProvider(): LocalizedString
    {
        return $this->localizedProvider;
    }

    public function setLocalizedShortTitle(LocalizedString $localizedShortTitle): static
    {
        $this->localizedShortTitle = $localizedShortTitle;

        return $this;
    }

    public function getLocalizedShortTitle(): LocalizedString
    {
        return $this->localizedShortTitle;
    }

    public function setLocalizedTitle(LocalizedString $localizedTitle): static
    {
        $this->localizedTitle = $localizedTitle;

        return $this;
    }

    public function getLocalizedTitle(): LocalizedString
    {
        return $this->localizedTitle;
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

    public function setProvider(string $provider): static
    {
        $this->provider = $provider;

        return $this;
    }

    public function getProvider(): string
    {
        return $this->provider;
    }

    public function setRedemptionChannel(string $redemptionChannel): static
    {
        $this->redemptionChannel = $redemptionChannel;

        return $this;
    }

    public function getRedemptionChannel(): string
    {
        return $this->redemptionChannel;
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

    public function setShortTitle(string $shortTitle): static
    {
        $this->shortTitle = $shortTitle;

        return $this;
    }

    public function getShortTitle(): string
    {
        return $this->shortTitle;
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

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitleImage(GoogleImage $titleImage): static
    {
        $this->titleImage = $titleImage;

        return $this;
    }

    public function getTitleImage(): GoogleImage
    {
        return $this->titleImage;
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
