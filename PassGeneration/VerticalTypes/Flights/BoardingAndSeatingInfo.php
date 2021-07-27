<?php

namespace PassGeneration\VerticalTypes\Flights;

use PassGeneration\DataTypes\Images\Image as GoogleImage;
use PassGeneration\DataTypes\LocalizedString;
use Google\Model as GoogleModel;

class BoardingAndSeatingInfo extends GoogleModel
{
    public string|null $boardingDoor = null;
    public string|null $boardingGroup = null;
    public string|null $boardingPosition = null;
    public GoogleImage|null $boardingPrivilegeImage = null;
    public string|null $kind = null;
    public LocalizedString|null $seatAssignment = null;
    public string|null $seatClass = null;
    public string|null $seatNumber = null;
    public string|null $sequenceNumber = null;

    public function setBoardingDoor($boardingDoor): static
    {
        $this->boardingDoor = $boardingDoor;

        return $this;
    }

    public function getBoardingDoor(): string
    {
        return $this->boardingDoor;
    }

    public function setBoardingGroup($boardingGroup): static
    {
        $this->boardingGroup = $boardingGroup;

        return $this;
    }

    public function getBoardingGroup(): string
    {
        return $this->boardingGroup;
    }

    public function setBoardingPosition($boardingPosition): static
    {
        $this->boardingPosition = $boardingPosition;

        return $this;
    }

    public function getBoardingPosition(): string
    {
        return $this->boardingPosition;
    }

    public function setBoardingPrivilegeImage(GoogleImage $boardingPrivilegeImage): static
    {
        $this->boardingPrivilegeImage = $boardingPrivilegeImage;

        return $this;
    }

    public function getBoardingPrivilegeImage(): GoogleImage
    {
        return $this->boardingPrivilegeImage;
    }

    public function setKind($kind): static
    {
        $this->kind = $kind;

        return $this;
    }

    public function getKind(): string
    {
        return $this->kind;
    }

    public function setSeatAssignment(LocalizedString $seatAssignment): static
    {
        $this->seatAssignment = $seatAssignment;

        return $this;
    }

    public function getSeatAssignment(): LocalizedString
    {
        return $this->seatAssignment;
    }

    public function setSeatClass($seatClass): static
    {
        $this->seatClass = $seatClass;

        return $this;
    }

    public function getSeatClass(): string
    {
        return $this->seatClass;
    }

    public function setSeatNumber($seatNumber): static
    {
        $this->seatNumber = $seatNumber;

        return $this;
    }

    public function getSeatNumber(): string
    {
        return $this->seatNumber;
    }

    public function setSequenceNumber($sequenceNumber): static
    {
        $this->sequenceNumber = $sequenceNumber;

        return $this;
    }

    public function getSequenceNumber(): string
    {
        return $this->sequenceNumber;
    }
}
