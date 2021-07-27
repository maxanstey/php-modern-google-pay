<?php

namespace PassGeneration\DataTypes\Tickets;

use PassGeneration\DataTypes\LocalizedString;
use Google\Collection as GoogleCollection;

class TicketLeg extends GoogleCollection
{
    /**
     * @var string|null
     */
    protected $collection_key = 'ticketSeats';
    /**
     * @var string|null
     */
    public string|null $arrivalDateTime = null;
    /**
     * @var string|null
     */
    public string|null $carriage = null;
    /**
     * @var string|null
     */
    public string|null $departureDateTime = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $destinationName = null;
    /**
     * @var string|null
     */
    public string|null $destinationStationCode = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $fareName = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $originName = null;
    /**
     * @var string|null
     */
    public string|null $originStationCode = null;
    /**
     * @var string|null
     */
    public string|null $platform = null;
    /**
     * @var TicketSeat|null
     */
    public TicketSeat|null $ticketSeat = null;
    /**
     * @var TicketSeat[]|null
     */
    public array|null $ticketSeats = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $transitOperatorName = null;
    /**
     * @var LocalizedString|null
     */
    public LocalizedString|null $transitTerminusName = null;
    /**
     * @var string|null
     */
    public string|null $zone = null;

    public function setArrivalDateTime(string $arrivalDateTime): static
    {
        $this->arrivalDateTime = $arrivalDateTime;

        return $this;
    }

    public function getArrivalDateTime(): string
    {
        return $this->arrivalDateTime;
    }

    public function setCarriage(string $carriage): static
    {
        $this->carriage = $carriage;

        return $this;
    }

    public function getCarriage(): string
    {
        return $this->carriage;
    }

    public function setDepartureDateTime(string $departureDateTime): static
    {
        $this->departureDateTime = $departureDateTime;

        return $this;
    }

    public function getDepartureDateTime(): string
    {
        return $this->departureDateTime;
    }

    public function setDestinationName(LocalizedString $destinationName): static
    {
        $this->destinationName = $destinationName;

        return $this;
    }

    public function getDestinationName(): LocalizedString
    {
        return $this->destinationName;
    }

    public function setDestinationStationCode(string $destinationStationCode): static
    {
        $this->destinationStationCode = $destinationStationCode;

        return $this;
    }

    public function getDestinationStationCode(): string
    {
        return $this->destinationStationCode;
    }

    public function setFareName(LocalizedString $fareName): static
    {
        $this->fareName = $fareName;

        return $this;
    }

    public function getFareName(): LocalizedString
    {
        return $this->fareName;
    }

    public function setOriginName(LocalizedString $originName): static
    {
        $this->originName = $originName;

        return $this;
    }

    public function getOriginName(): LocalizedString
    {
        return $this->originName;
    }

    public function setOriginStationCode(string $originStationCode): static
    {
        $this->originStationCode = $originStationCode;

        return $this;
    }

    public function getOriginStationCode(): string
    {
        return $this->originStationCode;
    }

    public function setPlatform(string $platform): static
    {
        $this->platform = $platform;

        return $this;
    }

    public function getPlatform(): string
    {
        return $this->platform;
    }

    public function setTicketSeat(TicketSeat $ticketSeat): static
    {
        $this->ticketSeat = $ticketSeat;

        return $this;
    }

    public function getTicketSeat(): TicketSeat
    {
        return $this->ticketSeat;
    }

    public function setTicketSeats(array $ticketSeats): static
    {
        $this->ticketSeats = $ticketSeats;

        return $this;
    }

    public function getTicketSeats(): array
    {
        return $this->ticketSeats;
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

    public function setTransitTerminusName(LocalizedString $transitTerminusName): static
    {
        $this->transitTerminusName = $transitTerminusName;

        return $this;
    }

    public function getTransitTerminusName(): LocalizedString
    {
        return $this->transitTerminusName;
    }

    public function setZone(string $zone): static
    {
        $this->zone = $zone;

        return $this;
    }

    public function getZone(): string
    {
        return $this->zone;
    }
}
