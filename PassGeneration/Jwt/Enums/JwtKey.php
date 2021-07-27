<?php

namespace PassGeneration\Jwt\Enums;

use PassGeneration\Enums\Enum;

class JwtKey extends Enum
{
    public const EVENT_TICKET_CLASS = 'eventTicketClasses';
    public const EVENT_TICKET_OBJECT = 'eventTicketObjects';
    public const FLIGHT_CLASS = 'flightClasses';
    public const FLIGHT_OBJECT = 'flightObjects';
    public const BOARDING_PASS_CLASS = 'flightClasses';
    public const BOARDING_PASS_OBJECT = 'flightObjects';
    public const GIFT_CARD_CLASS = 'giftCardClasses';
    public const GIFT_CARD_OBJECT = 'offerObjgiftCardObjectsects';
    public const LOYALTY_CLASS = 'loyaltyClasses';
    public const LOYALTY_OBJECT = 'loyaltyObjects';
    public const OFFER_CLASS = 'offerClasses';
    public const OFFER_OBJECT = 'offerObjects';
    public const TRANSIT_CLASS = 'transitClasses';
    public const TRANSIT_OBJECT = 'transitObjects';
}
