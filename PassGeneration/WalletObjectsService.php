<?php

namespace PassGeneration;

use PassGeneration\Enums\ResourceMethod;
use PassGeneration\VerticalTypes\Events\EventTicketClassResource;
use PassGeneration\VerticalTypes\Events\EventTicketObjectResource;
use PassGeneration\VerticalTypes\Flights\FlightClassResource;
use PassGeneration\VerticalTypes\Flights\FlightObjectResource;
use PassGeneration\VerticalTypes\GiftCards\GiftCardClassResource;
use PassGeneration\VerticalTypes\GiftCards\GiftCardObjectResource;
use PassGeneration\VerticalTypes\Issuers\IssuerResource;
use PassGeneration\Jwt\JwtResource;
use PassGeneration\VerticalTypes\Loyalty\LoyaltyClassResource;
use PassGeneration\VerticalTypes\Loyalty\LoyaltyObjectResource;
use PassGeneration\VerticalTypes\Offers\OfferClassResource;
use PassGeneration\VerticalTypes\Offers\OfferObjectResource;
use PassGeneration\DataTypes\Permissions\PermissionsResource;
use PassGeneration\SmartTap\SmartTapResource;
use PassGeneration\VerticalTypes\Transit\TransitClassResource;
use PassGeneration\VerticalTypes\Transit\TransitObjectResource;
use Google\Service;
use Google\Client as GoogleClient;

/**
 * class WalletObjectsService
 *
 * Service definition for Walletobjects (v1).
 *
 * API for issuers to save and manage Google Wallet Objects.
 *
 * For more information about this service, see the API documentation
 *  https://developers.google.com/pay/passes
 *
 * @author Google, Inc.
 */
class WalletObjectsService extends Service
{
    public EventTicketClassResource|null $eventTicketClass = null;
    public EventTicketObjectResource|null $eventTicketObject = null;
    public FlightClassResource|null $flightClass = null;
    public FlightObjectResource|null $flightObject = null;
    public GiftCardClassResource|null $giftCardClass = null;
    public GiftCardObjectResource|null $giftCardObject = null;
    public IssuerResource|null $issuer = null;
    public JwtResource|null $jwt = null;
    public LoyaltyClassResource|null $loyaltyClass = null;
    public LoyaltyObjectResource|null $loyaltyObject = null;
    public OfferClassResource|null $offerClass = null;
    public OfferObjectResource|null $offerObject = null;
    public PermissionsResource|null $permissions = null;
    public SmartTapResource|null $smartTap = null;
    public TransitClassResource|null $transitClass = null;
    public TransitObjectResource|null $transitObject = null;
    public string $serviceName = 'walletobjects';

    /**
     * Constructs the internal representation of the Walletobjects service.
     * @param GoogleClient $client
     */
    public function __construct(GoogleClient $client)
    {
        parent::__construct($client);

        $this->rootUrl = 'https://walletobjects.googleapis.com/';
        $this->servicePath = '';
        $this->batchPath = 'batch';
        $this->version = 'v1';

        $this->eventTicketClass = new EventTicketClassResource(
            $this,
            $this->serviceName,
            'eventticketclass',
            [
                'methods' => ResourceMethod::EVENT_TICKET_CLASS_RESOURCE_METHODS,
            ]
        );

        $this->eventTicketObject = new EventTicketObjectResource(
            $this,
            $this->serviceName,
            'eventticketobject',
            array(
                'methods' => ResourceMethod::EVENT_TICKET_OBJECT_RESOURCE_METHODS
            )
        );

        $this->flightClass = new FlightClassResource(
            $this,
            $this->serviceName,
            'flightclass',
            array(
                'methods' => ResourceMethod::FLIGHT_CLASS_RESOURCE_METHODS
            )
        );

        $this->flightObject = new FlightObjectResource(
            $this,
            $this->serviceName,
            'flightobject',
            array(
                'methods' => ResourceMethod::FLIGHT_OBJECT_RESOURCE_METHODS
            )
        );

        $this->giftCardClass = new GiftCardClassResource(
            $this,
            $this->serviceName,
            'giftcardclass',
            array(
                'methods' => ResourceMethod::GIFT_CARD_CLASS_RESOURCE_METHODS
            )
        );

        $this->giftCardObject = new GiftCardObjectResource(
            $this,
            $this->serviceName,
            'giftcardobject',
            array(
                'methods' => ResourceMethod::GIFT_CARD_OBJECT_RESOURCE_METHODS
            )
        );

        $this->issuer = new IssuerResource(
            $this,
            $this->serviceName,
            'issuer',
            array(
                'methods' => ResourceMethod::ISSUER_RESOURCE_METHODS
            )
        );

        $this->jwt = new JwtResource(
            $this,
            $this->serviceName,
            'jwt',
            array(
                'methods' => ResourceMethod::JWT_RESOURCE_METHODS
            )
        );

        $this->loyaltyClass = new LoyaltyClassResource(
            $this,
            $this->serviceName,
            'loyaltyclass',
            array(
                'methods' => ResourceMethod::LOYALTY_CLASS_RESOURCE_METHODS
            )
        );

        $this->loyaltyObject = new LoyaltyObjectResource(
            $this,
            $this->serviceName,
            'loyaltyobject',
            array(
                'methods' => ResourceMethod::LOYALTY_OBJECT_RESOURCE_METHODS
            )
        );

        $this->offerClass = new OfferClassResource(
            $this,
            $this->serviceName,
            'offerclass',
            array(
                'methods' => ResourceMethod::OFFER_CLASS_RESOURCE_METHODS
            )
        );

        $this->offerObject = new OfferObjectResource(
            $this,
            $this->serviceName,
            'offerobject',
            array(
                'methods' => ResourceMethod::OFFER_OBJECT_RESOURCE_METHODS
            )
        );

        $this->permissions = new PermissionsResource(
            $this,
            $this->serviceName,
            'permissions',
            array(
                'methods' => ResourceMethod::PERMISSIONS_RESOURCE_METHODS
            )
        );

        $this->smartTap = new SmartTapResource(
            $this,
            $this->serviceName,
            'smarttap',
            array(
                'methods' => ResourceMethod::SMART_TAP_RESOURCE_METHODS
            )
        );

        $this->transitClass = new TransitClassResource(
            $this,
            $this->serviceName,
            'transitclass',
            array(
                'methods' => ResourceMethod::TRANSIT_CLASS_RESOURCE_METHODS
            )
        );

        $this->transitObject = new TransitObjectResource(
            $this,
            $this->serviceName,
            'transitobject',
            array(
                'methods' => ResourceMethod::TRANSIT_OBJECT_RESOURCE_METHODS
            )
        );
    }
}
