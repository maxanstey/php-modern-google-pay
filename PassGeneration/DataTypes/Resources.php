<?php

namespace PassGeneration\DataTypes;

use Google\Collection as GoogleCollection;
use PassGeneration\VerticalTypes\Events\EventTicketClass;
use PassGeneration\VerticalTypes\Events\EventTicketObject;
use PassGeneration\VerticalTypes\Flights\FlightClass;
use PassGeneration\VerticalTypes\Flights\FlightObject;
use PassGeneration\VerticalTypes\GiftCards\GiftCardClass;
use PassGeneration\VerticalTypes\GiftCards\GiftCardObject;
use PassGeneration\VerticalTypes\Loyalty\LoyaltyClass;
use PassGeneration\VerticalTypes\Loyalty\LoyaltyObject;
use PassGeneration\VerticalTypes\Offers\OfferClass;
use PassGeneration\VerticalTypes\Offers\OfferObject;
use PassGeneration\VerticalTypes\Transit\TransitClass;
use PassGeneration\VerticalTypes\Transit\TransitObject;

class Resources extends GoogleCollection
{
    /**
     * @var string|null
     */
    protected $collection_key = 'transitObjects';
    /**
     * @var EventTicketClass[]|null
     */
    public array|null $eventTicketClasses = null;
    /**
     * @var EventTicketObject[]|null
     */
    public array|null $eventTicketObjects = null;
    /**
     * @var FlightClass[]|null
     */
    public array|null $flightClasses = null;
    /**
     * @var FlightObject[]|null
     */
    public array|null $flightObjects = null;
    /**
     * @var GiftCardClass[]|null
     */
    public array|null $giftCardClasses = null;
    /**
     * @var GiftCardObject[]|null
     */
    public array|null $giftCardObjects = null;
    /**
     * @var LoyaltyClass[]|null
     */
    public array|null $loyaltyClasses = null;
    /**
     * @var LoyaltyObject[]|null
     */
    public array|null $loyaltyObjects = null;
    /**
     * @var OfferClass[]|null
     */
    public array|null $offerClasses = null;
    /**
     * @var OfferObject[]|null
     */
    public array|null $offerObjects = null;
    /**
     * @var TransitClass[]|null
     */
    public array|null $transitClasses = null;
    /**
     * @var TransitObject[]|null
     */
    public array|null $transitObjects = null;

    public function setEventTicketClasses(array $eventTicketClasses): static
    {
        $this->eventTicketClasses = $eventTicketClasses;

        return $this;
    }

    public function getEventTicketClasses(): array
    {
        return $this->eventTicketClasses;
    }

    public function setEventTicketObjects(array $eventTicketObjects): static
    {
        $this->eventTicketObjects = $eventTicketObjects;

        return $this;
    }

    public function getEventTicketObjects(): array
    {
        return $this->eventTicketObjects;
    }

    public function setFlightClasses(array $flightClasses): static
    {
        $this->flightClasses = $flightClasses;

        return $this;
    }

    public function getFlightClasses(): array
    {
        return $this->flightClasses;
    }

    public function setFlightObjects(array $flightObjects): static
    {
        $this->flightObjects = $flightObjects;

        return $this;
    }

    public function getFlightObjects(): array
    {
        return $this->flightObjects;
    }

    public function setGiftCardClasses(array $giftCardClasses): static
    {
        $this->giftCardClasses = $giftCardClasses;

        return $this;
    }

    public function getGiftCardClasses(): array
    {
        return $this->giftCardClasses;
    }

    public function setGiftCardObjects(array $giftCardObjects): static
    {
        $this->giftCardObjects = $giftCardObjects;

        return $this;
    }

    public function getGiftCardObjects(): array
    {
        return $this->giftCardObjects;
    }

    public function setLoyaltyClasses(array $loyaltyClasses): static
    {
        $this->loyaltyClasses = $loyaltyClasses;

        return $this;
    }

    public function getLoyaltyClasses(): array
    {
        return $this->loyaltyClasses;
    }

    public function setLoyaltyObjects(array $loyaltyObjects): static
    {
        $this->loyaltyObjects = $loyaltyObjects;

        return $this;
    }

    public function getLoyaltyObjects(): array
    {
        return $this->loyaltyObjects;
    }

    public function setOfferClasses(array $offerClasses): static
    {
        $this->offerClasses = $offerClasses;

        return $this;
    }

    public function getOfferClasses(): array
    {
        return $this->offerClasses;
    }

    public function setOfferObjects(array $offerObjects): static
    {
        $this->offerObjects = $offerObjects;

        return $this;
    }
    public function getOfferObjects(): array
    {
        return $this->offerObjects;
    }

    public function setTransitClasses(array $transitClasses): static
    {
        $this->transitClasses = $transitClasses;

        return $this;
    }

    public function getTransitClasses(): array
    {
        return $this->transitClasses;
    }

    public function setTransitObjects(array $transitObjects): static
    {
        $this->transitObjects = $transitObjects;

        return $this;
    }

    public function getTransitObjects(): array
    {
        return $this->transitObjects;
    }
}
