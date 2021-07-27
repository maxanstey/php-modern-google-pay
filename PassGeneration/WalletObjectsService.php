<?php

namespace PassGeneration;

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
            array(
                'methods' => array(
                    'addmessage' => array(
                        'path' => 'walletobjects/v1/eventTicketClass/{resourceId}/addMessage',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'get' => array(
                        'path' => 'walletobjects/v1/eventTicketClass/{resourceId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'insert' => array(
                        'path' => 'walletobjects/v1/eventTicketClass',
                        'httpMethod' => 'POST',
                        'parameters' => array(),
                    ),'list' => array(
                        'path' => 'walletobjects/v1/eventTicketClass',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'issuerId' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'token' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ),'patch' => array(
                        'path' => 'walletobjects/v1/eventTicketClass/{resourceId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'update' => array(
                        'path' => 'walletobjects/v1/eventTicketClass/{resourceId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );

        $this->eventTicketObject = new EventTicketObjectResource(
            $this,
            $this->serviceName,
            'eventticketobject',
            array(
                'methods' => array(
                    'addmessage' => array(
                        'path' => 'walletobjects/v1/eventTicketObject/{resourceId}/addMessage',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'get' => array(
                        'path' => 'walletobjects/v1/eventTicketObject/{resourceId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'insert' => array(
                        'path' => 'walletobjects/v1/eventTicketObject',
                        'httpMethod' => 'POST',
                        'parameters' => array(),
                    ),'list' => array(
                        'path' => 'walletobjects/v1/eventTicketObject',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'classId' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'token' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ),'modifylinkedofferobjects' => array(
                        'path' => 'walletobjects/v1/eventTicketObject/{resourceId}/modifyLinkedOfferObjects',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'patch' => array(
                        'path' => 'walletobjects/v1/eventTicketObject/{resourceId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'update' => array(
                        'path' => 'walletobjects/v1/eventTicketObject/{resourceId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );

        $this->flightClass = new FlightClassResource(
            $this,
            $this->serviceName,
            'flightclass',
            array(
                'methods' => array(
                    'addmessage' => array(
                        'path' => 'walletobjects/v1/flightClass/{resourceId}/addMessage',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'get' => array(
                        'path' => 'walletobjects/v1/flightClass/{resourceId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'insert' => array(
                        'path' => 'walletobjects/v1/flightClass',
                        'httpMethod' => 'POST',
                        'parameters' => array(),
                    ),'list' => array(
                        'path' => 'walletobjects/v1/flightClass',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'issuerId' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'token' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ),'patch' => array(
                        'path' => 'walletobjects/v1/flightClass/{resourceId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'update' => array(
                        'path' => 'walletobjects/v1/flightClass/{resourceId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );

        $this->flightObject = new FlightObjectResource(
            $this,
            $this->serviceName,
            'flightobject',
            array(
                'methods' => array(
                    'addmessage' => array(
                        'path' => 'walletobjects/v1/flightObject/{resourceId}/addMessage',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'get' => array(
                        'path' => 'walletobjects/v1/flightObject/{resourceId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'insert' => array(
                        'path' => 'walletobjects/v1/flightObject',
                        'httpMethod' => 'POST',
                        'parameters' => array(),
                    ),'list' => array(
                        'path' => 'walletobjects/v1/flightObject',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'classId' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'token' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ),'patch' => array(
                        'path' => 'walletobjects/v1/flightObject/{resourceId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'update' => array(
                        'path' => 'walletobjects/v1/flightObject/{resourceId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );

        $this->giftCardClass = new GiftCardClassResource(
            $this,
            $this->serviceName,
            'giftcardclass',
            array(
                'methods' => array(
                    'addmessage' => array(
                        'path' => 'walletobjects/v1/giftCardClass/{resourceId}/addMessage',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'get' => array(
                        'path' => 'walletobjects/v1/giftCardClass/{resourceId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'insert' => array(
                        'path' => 'walletobjects/v1/giftCardClass',
                        'httpMethod' => 'POST',
                        'parameters' => array(),
                    ),'list' => array(
                        'path' => 'walletobjects/v1/giftCardClass',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'issuerId' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'token' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ),'patch' => array(
                        'path' => 'walletobjects/v1/giftCardClass/{resourceId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'update' => array(
                        'path' => 'walletobjects/v1/giftCardClass/{resourceId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );

        $this->giftCardObject = new GiftCardObjectResource(
            $this,
            $this->serviceName,
            'giftcardobject',
            array(
                'methods' => array(
                    'addmessage' => array(
                        'path' => 'walletobjects/v1/giftCardObject/{resourceId}/addMessage',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'get' => array(
                        'path' => 'walletobjects/v1/giftCardObject/{resourceId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'insert' => array(
                        'path' => 'walletobjects/v1/giftCardObject',
                        'httpMethod' => 'POST',
                        'parameters' => array(),
                    ),'list' => array(
                        'path' => 'walletobjects/v1/giftCardObject',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'classId' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'token' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ),'patch' => array(
                        'path' => 'walletobjects/v1/giftCardObject/{resourceId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'update' => array(
                        'path' => 'walletobjects/v1/giftCardObject/{resourceId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );

        $this->issuer = new IssuerResource(
            $this,
            $this->serviceName,
            'issuer',
            array(
                'methods' => array(
                    'get' => array(
                        'path' => 'walletobjects/v1/issuer/{resourceId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'insert' => array(
                        'path' => 'walletobjects/v1/issuer',
                        'httpMethod' => 'POST',
                        'parameters' => array(),
                    ),'list' => array(
                        'path' => 'walletobjects/v1/issuer',
                        'httpMethod' => 'GET',
                        'parameters' => array(),
                    ),'patch' => array(
                        'path' => 'walletobjects/v1/issuer/{resourceId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'update' => array(
                        'path' => 'walletobjects/v1/issuer/{resourceId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );

        $this->jwt = new JwtResource(
            $this,
            $this->serviceName,
            'jwt',
            array(
                'methods' => array(
                    'insert' => array(
                        'path' => 'walletobjects/v1/jwt',
                        'httpMethod' => 'POST',
                        'parameters' => array(),
                    ),
                )
            )
        );

        $this->loyaltyClass = new LoyaltyClassResource(
            $this,
            $this->serviceName,
            'loyaltyclass',
            array(
                'methods' => array(
                    'addmessage' => array(
                        'path' => 'walletobjects/v1/loyaltyClass/{resourceId}/addMessage',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'get' => array(
                        'path' => 'walletobjects/v1/loyaltyClass/{resourceId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'insert' => array(
                        'path' => 'walletobjects/v1/loyaltyClass',
                        'httpMethod' => 'POST',
                        'parameters' => array(),
                    ),'list' => array(
                        'path' => 'walletobjects/v1/loyaltyClass',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'issuerId' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'token' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ),'patch' => array(
                        'path' => 'walletobjects/v1/loyaltyClass/{resourceId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'update' => array(
                        'path' => 'walletobjects/v1/loyaltyClass/{resourceId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );

        $this->loyaltyObject = new LoyaltyObjectResource(
            $this,
            $this->serviceName,
            'loyaltyobject',
            array(
                'methods' => array(
                    'addmessage' => array(
                        'path' => 'walletobjects/v1/loyaltyObject/{resourceId}/addMessage',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'get' => array(
                        'path' => 'walletobjects/v1/loyaltyObject/{resourceId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'insert' => array(
                        'path' => 'walletobjects/v1/loyaltyObject',
                        'httpMethod' => 'POST',
                        'parameters' => array(),
                    ),'list' => array(
                        'path' => 'walletobjects/v1/loyaltyObject',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'classId' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'token' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ),'modifylinkedofferobjects' => array(
                        'path' => 'walletobjects/v1/loyaltyObject/{resourceId}/modifyLinkedOfferObjects',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'patch' => array(
                        'path' => 'walletobjects/v1/loyaltyObject/{resourceId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'update' => array(
                        'path' => 'walletobjects/v1/loyaltyObject/{resourceId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );

        $this->offerClass = new OfferClassResource(
            $this,
            $this->serviceName,
            'offerclass',
            array(
                'methods' => array(
                    'addmessage' => array(
                        'path' => 'walletobjects/v1/offerClass/{resourceId}/addMessage',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'get' => array(
                        'path' => 'walletobjects/v1/offerClass/{resourceId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'insert' => array(
                        'path' => 'walletobjects/v1/offerClass',
                        'httpMethod' => 'POST',
                        'parameters' => array(),
                    ),'list' => array(
                        'path' => 'walletobjects/v1/offerClass',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'issuerId' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'token' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ),'patch' => array(
                        'path' => 'walletobjects/v1/offerClass/{resourceId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'update' => array(
                        'path' => 'walletobjects/v1/offerClass/{resourceId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );

        $this->offerObject = new OfferObjectResource(
            $this,
            $this->serviceName,
            'offerobject',
            array(
                'methods' => array(
                    'addmessage' => array(
                        'path' => 'walletobjects/v1/offerObject/{resourceId}/addMessage',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'get' => array(
                        'path' => 'walletobjects/v1/offerObject/{resourceId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'insert' => array(
                        'path' => 'walletobjects/v1/offerObject',
                        'httpMethod' => 'POST',
                        'parameters' => array(),
                    ),'list' => array(
                        'path' => 'walletobjects/v1/offerObject',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'classId' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'token' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ),'patch' => array(
                        'path' => 'walletobjects/v1/offerObject/{resourceId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'update' => array(
                        'path' => 'walletobjects/v1/offerObject/{resourceId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );

        $this->permissions = new PermissionsResource(
            $this,
            $this->serviceName,
            'permissions',
            array(
                'methods' => array(
                    'get' => array(
                        'path' => 'walletobjects/v1/permissions/{resourceId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'update' => array(
                        'path' => 'walletobjects/v1/permissions/{resourceId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );

        $this->smartTap = new SmartTapResource(
            $this,
            $this->serviceName,
            'smarttap',
            array(
                'methods' => array(
                    'insert' => array(
                        'path' => 'walletobjects/v1/smartTap',
                        'httpMethod' => 'POST',
                        'parameters' => array(),
                    ),
                )
            )
        );

        $this->transitClass = new TransitClassResource(
            $this,
            $this->serviceName,
            'transitclass',
            array(
                'methods' => array(
                    'addmessage' => array(
                        'path' => 'walletobjects/v1/transitClass/{resourceId}/addMessage',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'get' => array(
                        'path' => 'walletobjects/v1/transitClass/{resourceId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'insert' => array(
                        'path' => 'walletobjects/v1/transitClass',
                        'httpMethod' => 'POST',
                        'parameters' => array(),
                    ),'list' => array(
                        'path' => 'walletobjects/v1/transitClass',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'issuerId' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'token' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ),'patch' => array(
                        'path' => 'walletobjects/v1/transitClass/{resourceId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'update' => array(
                        'path' => 'walletobjects/v1/transitClass/{resourceId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );

        $this->transitObject = new TransitObjectResource(
            $this,
            $this->serviceName,
            'transitobject',
            array(
                'methods' => array(
                    'addmessage' => array(
                        'path' => 'walletobjects/v1/transitObject/{resourceId}/addMessage',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'get' => array(
                        'path' => 'walletobjects/v1/transitObject/{resourceId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'insert' => array(
                        'path' => 'walletobjects/v1/transitObject',
                        'httpMethod' => 'POST',
                        'parameters' => array(),
                    ),'list' => array(
                        'path' => 'walletobjects/v1/transitObject',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'classId' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'token' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ),'patch' => array(
                        'path' => 'walletobjects/v1/transitObject/{resourceId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),'update' => array(
                        'path' => 'walletobjects/v1/transitObject/{resourceId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );
    }
}
