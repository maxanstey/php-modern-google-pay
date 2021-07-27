<?php

namespace PassGeneration\VerticalTypes\Loyalty;

use PassGeneration\DataTypes\CallbackOptions;
use PassGeneration\DataTypes\ClassTemplateInfo;
use PassGeneration\DataTypes\DiscoverablePrograms\DiscoverableProgram;
use PassGeneration\DataTypes\Images\Image as GoogleImage;
use PassGeneration\DataTypes\Uri;
use PassGeneration\DataTypes\Images\ImageModuleData;
use PassGeneration\DataTypes\LinksModuleData;
use PassGeneration\DataTypes\InfoModuleData;
use PassGeneration\DataTypes\LocalizedString;
use PassGeneration\DataTypes\LatLongPoint;
use PassGeneration\DataTypes\Message as GoogleMessage;
use PassGeneration\DataTypes\Review as GoogleReview;
use PassGeneration\DataTypes\TextModuleData;
use Google\Collection as GoogleCollection;

class LoyaltyClass extends GoogleCollection
{
    /**
     * @var string|null
     */
    protected $collection_key = 'textModulesData';
    /**
     * @var string|null
     */
    public string|null $accountIdLabel = null;
    /**
     * @var string|null
     */
    public string|null $accountNameLabel = null;
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
     * @var DiscoverableProgram|null
     */
    public DiscoverableProgram|null $discoverableProgram = null;
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
    public string|null $kind = null;
    /**
     * @var LinksModuleData|null
     */
    public LinksModuleData|null $linksModuleData = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $localizedAccountIdLabel = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $localizedAccountNameLabel = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $localizedIssuerName = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $localizedProgramName = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $localizedRewardsTier = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $localizedRewardsTierLabel = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $localizedSecondaryRewardsTier = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $localizedSecondaryRewardsTierLabel = null;
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
    public string|null $multipleDevicesAndHoldersAllowedStatus = null;
    /**
     * @var GoogleImage|null
     */
    public GoogleImage|null $programLogo = null;
    /**
     * @var string|null
     */
    public string|null $programName = null;
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
    public string|null $rewardsTier = null;
    /**
     * @var string|null
     */
    public string|null $rewardsTierLabel = null;
    /**
     * @var string|null
     */
    public string|null $secondaryRewardsTier = null;
    /**
     * @var string|null
     */
    public string|null $secondaryRewardsTierLabel = null;
    /**
     * @var TextModuleData|null[]
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

    public function setAccountIdLabel(string $accountIdLabel): static
    {
        $this->accountIdLabel = $accountIdLabel;

        return $this;
    }

    public function getAccountIdLabel(): string
    {
        return $this->accountIdLabel;
    }

    public function setAccountNameLabel(string $accountNameLabel): static
    {
        $this->accountNameLabel = $accountNameLabel;

        return $this;
    }

    public function getAccountNameLabel(): string
    {
        return $this->accountNameLabel;
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

    public function setDiscoverableProgram(DiscoverableProgram $discoverableProgram): static
    {
        $this->discoverableProgram = $discoverableProgram;

        return $this;
    }

    public function getDiscoverableProgram(): DiscoverableProgram
    {
        return $this->discoverableProgram;
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

    public function setLocalizedAccountIdLabel(LocalizedString $localizedAccountIdLabel): static
    {
        $this->localizedAccountIdLabel = $localizedAccountIdLabel;

        return $this;
    }

    public function getLocalizedAccountIdLabel(): LocalizedString
    {
        return $this->localizedAccountIdLabel;
    }

    public function setLocalizedAccountNameLabel(LocalizedString $localizedAccountNameLabel): static
    {
        $this->localizedAccountNameLabel = $localizedAccountNameLabel;

        return $this;
    }

    public function getLocalizedAccountNameLabel(): LocalizedString
    {
        return $this->localizedAccountNameLabel;
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

    public function setLocalizedProgramName(LocalizedString $localizedProgramName): static
    {
        $this->localizedProgramName = $localizedProgramName;

        return $this;
    }

    public function getLocalizedProgramName(): LocalizedString
    {
        return $this->localizedProgramName;
    }

    public function setLocalizedRewardsTier(LocalizedString $localizedRewardsTier): static
    {
        $this->localizedRewardsTier = $localizedRewardsTier;

        return $this;
    }

    public function getLocalizedRewardsTier(): LocalizedString
    {
        return $this->localizedRewardsTier;
    }

    public function setLocalizedRewardsTierLabel(LocalizedString $localizedRewardsTierLabel): static
    {
        $this->localizedRewardsTierLabel = $localizedRewardsTierLabel;

        return $this;
    }

    public function getLocalizedRewardsTierLabel(): LocalizedString
    {
        return $this->localizedRewardsTierLabel;
    }

    public function setLocalizedSecondaryRewardsTier(LocalizedString $localizedSecondaryRewardsTier): static
    {
        $this->localizedSecondaryRewardsTier = $localizedSecondaryRewardsTier;

        return $this;
    }

    public function getLocalizedSecondaryRewardsTier(): LocalizedString
    {
        return $this->localizedSecondaryRewardsTier;
    }

    public function setLocalizedSecondaryRewardsTierLabel(LocalizedString $localizedSecondaryRewardsTierLabel): static
    {
        $this->localizedSecondaryRewardsTierLabel = $localizedSecondaryRewardsTierLabel;

        return $this;
    }

    public function getLocalizedSecondaryRewardsTierLabel(): LocalizedString
    {
        return $this->localizedSecondaryRewardsTierLabel;
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

    public function setProgramLogo(GoogleImage $programLogo): static
    {
        $this->programLogo = $programLogo;

        return $this;
    }

    public function getProgramLogo(): GoogleImage
    {
        return $this->programLogo;
    }

    public function setProgramName(string $programName): static
    {
        $this->programName = $programName;

        return $this;
    }

    public function getProgramName(): string
    {
        return $this->programName;
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

    public function setRewardsTier(string $rewardsTier): static
    {
        $this->rewardsTier = $rewardsTier;

        return $this;
    }

    public function getRewardsTier(): string
    {
        return $this->rewardsTier;
    }

    public function setRewardsTierLabel(string $rewardsTierLabel): static
    {
        $this->rewardsTierLabel = $rewardsTierLabel;

        return $this;
    }

    public function getRewardsTierLabel(): string
    {
        return $this->rewardsTierLabel;
    }

    public function setSecondaryRewardsTier(string $secondaryRewardsTier): static
    {
        $this->secondaryRewardsTier = $secondaryRewardsTier;

        return $this;
    }

    public function getSecondaryRewardsTier(): string
    {
        return $this->secondaryRewardsTier;
    }

    public function setSecondaryRewardsTierLabel(string $secondaryRewardsTierLabel): static
    {
        $this->secondaryRewardsTierLabel = $secondaryRewardsTierLabel;

        return $this;
    }

    public function getSecondaryRewardsTierLabel(): string
    {
        return $this->secondaryRewardsTierLabel;
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
