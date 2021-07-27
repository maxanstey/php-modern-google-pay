<?php

namespace PassGeneration\Enums;

class ResourceMethod extends Enum
{
    public const EVENT_TICKET_CLASS_RESOURCE_METHODS = [
        'addmessage' => [
            'path' => 'walletobjects/v1/eventTicketClass/{resourceId}/addMessage',
            'httpMethod' => 'POST',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'get' => [
            'path' => 'walletobjects/v1/eventTicketClass/{resourceId}',
            'httpMethod' => 'GET',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'insert' => [
            'path' => 'walletobjects/v1/eventTicketClass',
            'httpMethod' => 'POST',
            'parameters' => []
        ], 'list' => [
            'path' => 'walletobjects/v1/eventTicketClass',
            'httpMethod' => 'GET',
            'parameters' => [
                'issuerId' => [
                    'location' => 'query',
                    'type' => 'string',
                ], 'token' => [
                    'location' => 'query',
                    'type' => 'string',
                ], 'maxResults' => [
                    'location' => 'query',
                    'type' => 'integer',
                ]
            ]
        ], 'patch' => [
            'path' => 'walletobjects/v1/eventTicketClass/{resourceId}',
            'httpMethod' => 'PATCH',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'update' => [
            'path' => 'walletobjects/v1/eventTicketClass/{resourceId}',
            'httpMethod' => 'PUT',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ]
    ];
    public const EVENT_TICKET_OBJECT_RESOURCE_METHODS = [
        'addmessage' => [
            'path' => 'walletobjects/v1/eventTicketObject/{resourceId}/addMessage',
            'httpMethod' => 'POST',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'get' => [
            'path' => 'walletobjects/v1/eventTicketObject/{resourceId}',
            'httpMethod' => 'GET',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'insert' => [
            'path' => 'walletobjects/v1/eventTicketObject',
            'httpMethod' => 'POST',
            'parameters' => []
        ], 'list' => [
            'path' => 'walletobjects/v1/eventTicketObject',
            'httpMethod' => 'GET',
            'parameters' => [
                'classId' => [
                    'location' => 'query',
                    'type' => 'string',
                ], 'token' => [
                    'location' => 'query',
                    'type' => 'string',
                ], 'maxResults' => [
                    'location' => 'query',
                    'type' => 'integer',
                ]
            ]
        ], 'modifylinkedofferobjects' => [
            'path' => 'walletobjects/v1/eventTicketObject/{resourceId}/modifyLinkedOfferObjects',
            'httpMethod' => 'POST',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'patch' => [
            'path' => 'walletobjects/v1/eventTicketObject/{resourceId}',
            'httpMethod' => 'PATCH',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'update' => [
            'path' => 'walletobjects/v1/eventTicketObject/{resourceId}',
            'httpMethod' => 'PUT',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ]
    ];
    public const FLIGHT_CLASS_RESOURCE_METHODS = [
        'addmessage' => [
            'path' => 'walletobjects/v1/flightClass/{resourceId}/addMessage',
            'httpMethod' => 'POST',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'get' => [
            'path' => 'walletobjects/v1/flightClass/{resourceId}',
            'httpMethod' => 'GET',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'insert' => [
            'path' => 'walletobjects/v1/flightClass',
            'httpMethod' => 'POST',
            'parameters' => []
        ], 'list' => [
            'path' => 'walletobjects/v1/flightClass',
            'httpMethod' => 'GET',
            'parameters' => [
                'issuerId' => [
                    'location' => 'query',
                    'type' => 'string',
                ], 'token' => [
                    'location' => 'query',
                    'type' => 'string',
                ], 'maxResults' => [
                    'location' => 'query',
                    'type' => 'integer',
                ]
            ]
        ], 'patch' => [
            'path' => 'walletobjects/v1/flightClass/{resourceId}',
            'httpMethod' => 'PATCH',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'update' => [
            'path' => 'walletobjects/v1/flightClass/{resourceId}',
            'httpMethod' => 'PUT',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ]
    ];
    public const FLIGHT_OBJECT_RESOURCE_METHODS = [
        'addmessage' => [
            'path' => 'walletobjects/v1/flightObject/{resourceId}/addMessage',
            'httpMethod' => 'POST',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'get' => [
            'path' => 'walletobjects/v1/flightObject/{resourceId}',
            'httpMethod' => 'GET',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'insert' => [
            'path' => 'walletobjects/v1/flightObject',
            'httpMethod' => 'POST',
            'parameters' => []
        ], 'list' => [
            'path' => 'walletobjects/v1/flightObject',
            'httpMethod' => 'GET',
            'parameters' => [
                'classId' => [
                    'location' => 'query',
                    'type' => 'string',
                ], 'token' => [
                    'location' => 'query',
                    'type' => 'string',
                ], 'maxResults' => [
                    'location' => 'query',
                    'type' => 'integer',
                ]
            ]
        ], 'patch' => [
            'path' => 'walletobjects/v1/flightObject/{resourceId}',
            'httpMethod' => 'PATCH',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'update' => [
            'path' => 'walletobjects/v1/flightObject/{resourceId}',
            'httpMethod' => 'PUT',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ]
    ];
    public const GIFT_CARD_CLASS_RESOURCE_METHODS = [
        'addmessage' => [
            'path' => 'walletobjects/v1/giftCardClass/{resourceId}/addMessage',
            'httpMethod' => 'POST',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'get' => [
            'path' => 'walletobjects/v1/giftCardClass/{resourceId}',
            'httpMethod' => 'GET',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'insert' => [
            'path' => 'walletobjects/v1/giftCardClass',
            'httpMethod' => 'POST',
            'parameters' => []
        ], 'list' => [
            'path' => 'walletobjects/v1/giftCardClass',
            'httpMethod' => 'GET',
            'parameters' => [
                'issuerId' => [
                    'location' => 'query',
                    'type' => 'string',
                ], 'token' => [
                    'location' => 'query',
                    'type' => 'string',
                ], 'maxResults' => [
                    'location' => 'query',
                    'type' => 'integer',
                ]
            ]
        ], 'patch' => [
            'path' => 'walletobjects/v1/giftCardClass/{resourceId}',
            'httpMethod' => 'PATCH',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'update' => [
            'path' => 'walletobjects/v1/giftCardClass/{resourceId}',
            'httpMethod' => 'PUT',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ]
    ];
    public const GIFT_CARD_OBJECT_RESOURCE_METHODS = [
        'addmessage' => [
            'path' => 'walletobjects/v1/giftCardObject/{resourceId}/addMessage',
            'httpMethod' => 'POST',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'get' => [
            'path' => 'walletobjects/v1/giftCardObject/{resourceId}',
            'httpMethod' => 'GET',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'insert' => [
            'path' => 'walletobjects/v1/giftCardObject',
            'httpMethod' => 'POST',
            'parameters' => []
        ], 'list' => [
            'path' => 'walletobjects/v1/giftCardObject',
            'httpMethod' => 'GET',
            'parameters' => [
                'classId' => [
                    'location' => 'query',
                    'type' => 'string',
                ], 'token' => [
                    'location' => 'query',
                    'type' => 'string',
                ], 'maxResults' => [
                    'location' => 'query',
                    'type' => 'integer',
                ]
            ]
        ], 'patch' => [
            'path' => 'walletobjects/v1/giftCardObject/{resourceId}',
            'httpMethod' => 'PATCH',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'update' => [
            'path' => 'walletobjects/v1/giftCardObject/{resourceId}',
            'httpMethod' => 'PUT',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ]
    ];
    public const ISSUER_RESOURCE_METHODS = [
        'get' => [
            'path' => 'walletobjects/v1/issuer/{resourceId}',
            'httpMethod' => 'GET',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'insert' => [
            'path' => 'walletobjects/v1/issuer',
            'httpMethod' => 'POST',
            'parameters' => []
        ], 'list' => [
            'path' => 'walletobjects/v1/issuer',
            'httpMethod' => 'GET',
            'parameters' => []
        ], 'patch' => [
            'path' => 'walletobjects/v1/issuer/{resourceId}',
            'httpMethod' => 'PATCH',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'update' => [
            'path' => 'walletobjects/v1/issuer/{resourceId}',
            'httpMethod' => 'PUT',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ]
    ];
    public const JWT_RESOURCE_METHODS = [
        'insert' => [
            'path' => 'walletobjects/v1/jwt',
            'httpMethod' => 'POST',
            'parameters' => []
        ]
    ];
    public const LOYALTY_CLASS_RESOURCE_METHODS = [
        'addmessage' => [
            'path' => 'walletobjects/v1/loyaltyClass/{resourceId}/addMessage',
            'httpMethod' => 'POST',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'get' => [
            'path' => 'walletobjects/v1/loyaltyClass/{resourceId}',
            'httpMethod' => 'GET',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'insert' => [
            'path' => 'walletobjects/v1/loyaltyClass',
            'httpMethod' => 'POST',
            'parameters' => []
        ], 'list' => [
            'path' => 'walletobjects/v1/loyaltyClass',
            'httpMethod' => 'GET',
            'parameters' => [
                'issuerId' => [
                    'location' => 'query',
                    'type' => 'string',
                ], 'token' => [
                    'location' => 'query',
                    'type' => 'string',
                ], 'maxResults' => [
                    'location' => 'query',
                    'type' => 'integer',
                ]
            ]
        ], 'patch' => [
            'path' => 'walletobjects/v1/loyaltyClass/{resourceId}',
            'httpMethod' => 'PATCH',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'update' => [
            'path' => 'walletobjects/v1/loyaltyClass/{resourceId}',
            'httpMethod' => 'PUT',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ]
    ];
    public const LOYALTY_OBJECT_RESOURCE_METHODS = [
        'addmessage' => [
            'path' => 'walletobjects/v1/loyaltyObject/{resourceId}/addMessage',
            'httpMethod' => 'POST',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'get' => [
            'path' => 'walletobjects/v1/loyaltyObject/{resourceId}',
            'httpMethod' => 'GET',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'insert' => [
            'path' => 'walletobjects/v1/loyaltyObject',
            'httpMethod' => 'POST',
            'parameters' => []
        ], 'list' => [
            'path' => 'walletobjects/v1/loyaltyObject',
            'httpMethod' => 'GET',
            'parameters' => [
                'classId' => [
                    'location' => 'query',
                    'type' => 'string',
                ], 'token' => [
                    'location' => 'query',
                    'type' => 'string',
                ], 'maxResults' => [
                    'location' => 'query',
                    'type' => 'integer',
                ]
            ]
        ], 'modifylinkedofferobjects' => [
            'path' => 'walletobjects/v1/loyaltyObject/{resourceId}/modifyLinkedOfferObjects',
            'httpMethod' => 'POST',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'patch' => [
            'path' => 'walletobjects/v1/loyaltyObject/{resourceId}',
            'httpMethod' => 'PATCH',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'update' => [
            'path' => 'walletobjects/v1/loyaltyObject/{resourceId}',
            'httpMethod' => 'PUT',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ]
    ];
    public const OFFER_CLASS_RESOURCE_METHODS = [
        'addmessage' => [
            'path' => 'walletobjects/v1/offerClass/{resourceId}/addMessage',
            'httpMethod' => 'POST',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'get' => [
            'path' => 'walletobjects/v1/offerClass/{resourceId}',
            'httpMethod' => 'GET',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'insert' => [
            'path' => 'walletobjects/v1/offerClass',
            'httpMethod' => 'POST',
            'parameters' => []
        ], 'list' => [
            'path' => 'walletobjects/v1/offerClass',
            'httpMethod' => 'GET',
            'parameters' => [
                'issuerId' => [
                    'location' => 'query',
                    'type' => 'string',
                ], 'token' => [
                    'location' => 'query',
                    'type' => 'string',
                ], 'maxResults' => [
                    'location' => 'query',
                    'type' => 'integer',
                ]
            ]
        ], 'patch' => [
            'path' => 'walletobjects/v1/offerClass/{resourceId}',
            'httpMethod' => 'PATCH',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'update' => [
            'path' => 'walletobjects/v1/offerClass/{resourceId}',
            'httpMethod' => 'PUT',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ]
    ];
    public const OFFER_OBJECT_RESOURCE_METHODS = [
        'addmessage' => [
            'path' => 'walletobjects/v1/offerObject/{resourceId}/addMessage',
            'httpMethod' => 'POST',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'get' => [
            'path' => 'walletobjects/v1/offerObject/{resourceId}',
            'httpMethod' => 'GET',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'insert' => [
            'path' => 'walletobjects/v1/offerObject',
            'httpMethod' => 'POST',
            'parameters' => []
        ], 'list' => [
            'path' => 'walletobjects/v1/offerObject',
            'httpMethod' => 'GET',
            'parameters' => [
                'classId' => [
                    'location' => 'query',
                    'type' => 'string',
                ], 'token' => [
                    'location' => 'query',
                    'type' => 'string',
                ], 'maxResults' => [
                    'location' => 'query',
                    'type' => 'integer',
                ]
            ]
        ], 'patch' => [
            'path' => 'walletobjects/v1/offerObject/{resourceId}',
            'httpMethod' => 'PATCH',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'update' => [
            'path' => 'walletobjects/v1/offerObject/{resourceId}',
            'httpMethod' => 'PUT',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ]
    ];
    public const PERMISSIONS_RESOURCE_METHODS = [
        'get' => [
            'path' => 'walletobjects/v1/permissions/{resourceId}',
            'httpMethod' => 'GET',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'update' => [
            'path' => 'walletobjects/v1/permissions/{resourceId}',
            'httpMethod' => 'PUT',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ]
    ];
    public const SMART_TAP_RESOURCE_METHODS = [
        'insert' => [
            'path' => 'walletobjects/v1/smartTap',
            'httpMethod' => 'POST',
            'parameters' => []
        ]
    ];
    public const TRANSIT_CLASS_RESOURCE_METHODS = [
        'addmessage' => [
            'path' => 'walletobjects/v1/transitClass/{resourceId}/addMessage',
            'httpMethod' => 'POST',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'get' => [
            'path' => 'walletobjects/v1/transitClass/{resourceId}',
            'httpMethod' => 'GET',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'insert' => [
            'path' => 'walletobjects/v1/transitClass',
            'httpMethod' => 'POST',
            'parameters' => []
        ], 'list' => [
            'path' => 'walletobjects/v1/transitClass',
            'httpMethod' => 'GET',
            'parameters' => [
                'issuerId' => [
                    'location' => 'query',
                    'type' => 'string',
                ], 'token' => [
                    'location' => 'query',
                    'type' => 'string',
                ], 'maxResults' => [
                    'location' => 'query',
                    'type' => 'integer',
                ]
            ]
        ], 'patch' => [
            'path' => 'walletobjects/v1/transitClass/{resourceId}',
            'httpMethod' => 'PATCH',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'update' => [
            'path' => 'walletobjects/v1/transitClass/{resourceId}',
            'httpMethod' => 'PUT',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ]
    ];
    public const TRANSIT_OBJECT_RESOURCE_METHODS = [
        'addmessage' => [
            'path' => 'walletobjects/v1/transitObject/{resourceId}/addMessage',
            'httpMethod' => 'POST',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'get' => [
            'path' => 'walletobjects/v1/transitObject/{resourceId}',
            'httpMethod' => 'GET',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'insert' => [
            'path' => 'walletobjects/v1/transitObject',
            'httpMethod' => 'POST',
            'parameters' => []
        ], 'list' => [
            'path' => 'walletobjects/v1/transitObject',
            'httpMethod' => 'GET',
            'parameters' => [
                'classId' => [
                    'location' => 'query',
                    'type' => 'string',
                ], 'token' => [
                    'location' => 'query',
                    'type' => 'string',
                ], 'maxResults' => [
                    'location' => 'query',
                    'type' => 'integer',
                ]
            ]
        ], 'patch' => [
            'path' => 'walletobjects/v1/transitObject/{resourceId}',
            'httpMethod' => 'PATCH',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ], 'update' => [
            'path' => 'walletobjects/v1/transitObject/{resourceId}',
            'httpMethod' => 'PUT',
            'parameters' => [
                'resourceId' => [
                    'location' => 'path',
                    'type' => 'string',
                    'required' => true,
                ]
            ]
        ]
    ];
}
