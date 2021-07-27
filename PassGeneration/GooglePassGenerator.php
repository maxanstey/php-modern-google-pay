<?php

namespace PassGeneration;

require '../vendor/autoload.php';

/**
 * TODO:
 *   Document opt_param string classId The ID of -- in header of Resource class
 */

use PassGeneration\Jwt\Enums\JwtKey;
use PassGeneration\VerticalTypes\Enums\VerticalType;
use PassGeneration\VerticalTypes\Events\EventTicketClassResource;
use PassGeneration\VerticalTypes\Events\EventTicketObject;
use PassGeneration\VerticalTypes\Events\EventTicketObjectResource;
use PassGeneration\VerticalTypes\Flights\FlightClassResource;
use PassGeneration\VerticalTypes\Flights\FlightObject;
use PassGeneration\VerticalTypes\GiftCards\GiftCardClassResource;
use PassGeneration\VerticalTypes\GiftCards\GiftCardObject;
use PassGeneration\Google_Service_Walletobjects as WalletObjectsService;
use PassGeneration\VerticalTypes\Loyalty\LoyaltyClassResource;
use PassGeneration\VerticalTypes\Loyalty\LoyaltyObject;
use PassGeneration\VerticalTypes\Offers\OfferClassResource;
use PassGeneration\VerticalTypes\Offers\OfferObject;
use PassGeneration\VerticalTypes\Transit\TransitClassResource;
use PassGeneration\VerticalTypes\Transit\TransitObject;
use PassGeneration\VerticalTypes\Events\EventTicketClass;
use PassGeneration\VerticalTypes\Flights\FlightClass;
use PassGeneration\VerticalTypes\GiftCards\GiftCardClass;
use PassGeneration\VerticalTypes\Loyalty\LoyaltyClass;
use PassGeneration\VerticalTypes\Offers\OfferClass;
use PassGeneration\VerticalTypes\Transit\TransitClass;
use PassGeneration\VerticalTypes\Offers\OfferObjectResource;
use PassGeneration\VerticalTypes\Loyalty\LoyaltyObjectResource;
use PassGeneration\VerticalTypes\Flights\FlightObjectResource;
use PassGeneration\VerticalTypes\Transit\TransitObjectResource;
use PassGeneration\VerticalTypes\GiftCards\GiftCardObjectResource;
use Exception;
use Google\Client as GoogleClient;
use InvalidArgumentException;
use PassGeneration\Traits\GeneratesGooglePayPassJwtTokens;

/**
 * Created by following the guide found here:
 *   https://developers.google.com/docs/api/quickstart/php
 *
 * Class Generate
 * @package PassGeneration
 */
class GooglePassGenerator
{
    use GeneratesGooglePayPassJwtTokens;

    /**
     * @var array
     */
    private array $scopes = [
        'https://www.googleapis.com/auth/wallet_object.issuer',
    ];
    /**
     * @var string
     */
    public string $tokenPath = __DIR__ . '/token.json';
    /**
     * @var string
     */
    public const REVIEW_STATUS_DRAFT = 'draft';
    /**
     * @var string
     */
    public const REVIEW_STATUS_UNDER_REVIEW = 'underReview';
    /**
     * @var WalletObjectsService|null
     */
    public WalletObjectsService|null $service = null;
    /**
     * @var array
     */
    public array $payload = [];
    /**
     * @var GoogleClient|null
     */
    public GoogleClient|null $client = null;

    public function __construct(
        string $serviceAccountEmailAddress,
        string $serviceAccountJson,
        string $applicationName,
        int $issuerId,
        array $origins
    ) {
        $this->defineGlobals(
            $serviceAccountEmailAddress,
            $serviceAccountJson,
            $applicationName,
            $issuerId,
            $origins
        );

        $this->client = new GoogleClient();

        // Do OAuth2.0 via service account file.
        //   See https://developers.google.com/api-client-library/php/auth/service-accounts#authorizingrequests
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . SERVICE_ACCOUNT_FILE); // for Google_Client() initialization for server-to-server
        $this->client->useApplicationDefaultCredentials();

        // Set application name.
        $this->client->setApplicationName(APPLICATION_NAME);

        // Set API scopes.
        $this->client->setScopes([SCOPES]);
        $this->service = new WalletObjectsService($this->client);
    }

    public function __destruct()
    {
        try {
            unlink(SERVICE_ACCOUNT_FILE);
        } catch (Exception $exception) {

        }
    }

    /**
     * Generates a signed "skinny" JWT.
     * 2 REST calls are made:
     *   x1 pre-insert one classes
     *   x1 pre-insert one object which uses previously inserted class
     *
     * This JWT can be used in JS web button.
     * This is the shortest type of JWT; recommended for Android intents/redirects.
     *
     * See https://developers.google.com/pay/passes/reference/v1/
     *
     * @param string $verticalType - define type of pass being generated
     * @param string $classId - The unique identifier for an class.
     * @param string $objectId - The unique identifier for an object.
     * @return string|null $signedJwt - a signed JWT
     */
    public function makeSkinnyJwt(
        string $verticalType,
        string $classId,
        string $objectId
    ): ?string {
        try {
            // get class and object definition as well as test if ids exist in backend
            // make authorized REST call to explicitly insert class and object into Google server.
            // if this is successful, you can check/update class definitions in Merchant Center GUI:
            // https://pay.google.com/gp/m/issuer/list
//            $this->getClassServiceByVerticalType($verticalType)->insert(
//                $this->createClassByVerticalType($verticalType, $classId)
//            );
//
//            $this->getObjectServiceByVerticalType($verticalType)->insert(
//                $this->createObjectResourceByVerticalType($verticalType, $classId, $objectId)
//            );

//            $this->addObjectByVerticalType($verticalType, ['id' => $objectId]);
            $signedJwt = $this->generateSignedJwt(
                SERVICE_ACCOUNT_EMAIL_ADDRESS,
                AUDIENCE,
                JWT_TYPE,
                [
                    'offerClasses' => [
                        $this->createClassByVerticalType($verticalType, $classId),
                    ],
                    'offerObjects' => [
                        $this->createObjectResourceByVerticalType($verticalType, $classId, $objectId),
                    ],
                ],
                ORIGINS
            );
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }

        // return "skinny" JWT. Try putting it into save link.
        // See https://developers.google.com/pay/passes/guides/get-started/implementing-the-api/save-to-google-pay#add-link-to-email
        return $signedJwt ?? null;
    }

    private function getClassServiceByVerticalType(
        string $verticalType
    ): TransitClassResource|LoyaltyClassResource|EventTicketClassResource|GiftCardClassResource|OfferClassResource|FlightClassResource {
        switch ($verticalType) {
            case VerticalType::OFFER:
                return $this->service->offerClass;
            case VerticalType::EVENT_TICKET:
                return $this->service->eventTicketClass;
            case VerticalType::FLIGHT:
                return $this->service->flightClass;
            case VerticalType::GIFT_CARD:
                return $this->service->giftCardClass;
            case VerticalType::LOYALTY:
                return $this->service->loyaltyClass;
            case VerticalType::TRANSIT:
                return $this->service->transitClass;
        }

        // TODO:
        throw new InvalidArgumentException();
    }

    private function getObjectServiceByVerticalType(
        string $verticalType
    ): EventTicketObjectResource|OfferObjectResource|LoyaltyObjectResource|FlightObjectResource|TransitObjectResource|GiftCardObjectResource {
        switch ($verticalType) {
            case VerticalType::OFFER:
                return $this->service->offerObject;
            case VerticalType::EVENT_TICKET:
                return $this->service->eventTicketObject;
            case VerticalType::FLIGHT:
                return $this->service->flightObject;
            case VerticalType::GIFT_CARD:
                return $this->service->giftCardObject;
            case VerticalType::LOYALTY:
                return $this->service->loyaltyObject;
            case VerticalType::TRANSIT:
                return $this->service->transitObject;
        }

        // TODO:
        throw new InvalidArgumentException();
    }

    private function createClassByVerticalType(
        string $verticalType,
        string $classId
    ): TransitClass|LoyaltyClass|EventTicketClass|GiftCardClass|OfferClass|FlightClass {
        switch ($verticalType) {
            case VerticalType::OFFER:
                return ResourceDefinitions::makeOfferClass($classId);
            case VerticalType::EVENT_TICKET:
                return ResourceDefinitions::makeEventTicketClass($classId);
            case VerticalType::FLIGHT:
                return ResourceDefinitions::makeFlightClass($classId);
            case VerticalType::GIFT_CARD:
                return ResourceDefinitions::makeGiftCardClass($classId);
            case VerticalType::LOYALTY:
                return ResourceDefinitions::makeLoyaltyClass($classId);
            case VerticalType::TRANSIT:
                return ResourceDefinitions::makeTransitClass($classId);
        }

        // TODO:
        throw new InvalidArgumentException();
    }

    private function createObjectResourceByVerticalType(
        string $verticalType,
        string $classId,
        string $objectId
    ): EventTicketObject|OfferObject|TransitObject|GiftCardObject|FlightObject|LoyaltyObject {
        switch ($verticalType) {
            case VerticalType::OFFER:
                return ResourceDefinitions::makeOfferObjectResource($classId, $objectId);
            case VerticalType::EVENT_TICKET:
                return ResourceDefinitions::makeEventTicketObjectResource($classId, $objectId);
            case VerticalType::FLIGHT:
                return ResourceDefinitions::makeFlightObjectResource($classId, $objectId);
            case VerticalType::GIFT_CARD:
                return ResourceDefinitions::makeGiftCardObjectResource($classId, $objectId);
            case VerticalType::LOYALTY:
                return ResourceDefinitions::makeLoyaltyObjectResource($classId, $objectId);
            case VerticalType::TRANSIT:
                return ResourceDefinitions::makeTransitObjectResource($classId, $objectId);
        }

        // TODO:
        throw new InvalidArgumentException();
    }

    private function addObjectByVerticalType(
        string $verticalType,
        array $payload
    ): void {
        $key = JwtKey::byVerticalType($verticalType);

        if (isset($this->payload[$key]) === true) {
            // TODO:
            throw new Exception();
        }

        $this->payload[$key][] = $payload;
    }

    private function defineGlobals(
        string $serviceAccountEmailAddress,
        string $serviceAccountJson,
        string $applicationName,
        int $issuerId,
        array $origins
    ): void {
        define('SERVICE_ACCOUNT_EMAIL_ADDRESS', $serviceAccountEmailAddress);

        define('SERVICE_ACCOUNT_FILE', __DIR__ . '/service-account-file.json');
        file_put_contents(SERVICE_ACCOUNT_FILE, $serviceAccountJson);

        // Used by the Google Pay API for Passes Client library
        define('APPLICATION_NAME', $applicationName);

        // Identifier of Google Pay API for Passes Merchant Center
        define('ISSUER_ID', $issuerId);  // https://pay.google.com/gp/m/issuer/list

        // List of origins for save to phone button. Used for JWT
        //   See https://developers.google.com/pay/passes/reference/s2w-reference
        define('ORIGINS', $origins); // https://pay.google.com/gp/m/issuer/list

        // Constants that are application agnostic. Used for JWT
        define('AUDIENCE', 'google');
        define('JWT_TYPE', 'savetoandroidpay');
        define('SCOPES', 'https://www.googleapis.com/auth/wallet_object.issuer');

        // Load the private key as String from service account file
        $credentialJson = json_decode($serviceAccountJson, true);

        if (json_last_error() !== JSON_ERROR_NONE || isset($credentialJson['private_key']) === false) {
            throw new InvalidArgumentException('The supplied $serviceAccountJson is invalid.');
        }

        define('SERVICE_ACCOUNT_PRIVATE_KEY', $credentialJson['private_key']);
    }
}
