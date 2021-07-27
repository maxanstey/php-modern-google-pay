<?php

namespace PassGeneration\DataTypes\Tickets;

use PassGeneration\DataTypes\LocalizedString;
use Google\Model as GoogleModel;

class TicketRestrictions extends GoogleModel
{
    public LocalizedString|null $otherRestrictions = null;
    public LocalizedString|null $routeRestrictions = null;
    public LocalizedString|null $routeRestrictionsDetails = null;
    public LocalizedString|null $timeRestrictions = null;

    public function setOtherRestrictions(LocalizedString $otherRestrictions): static
    {
        $this->otherRestrictions = $otherRestrictions;

        return $this;
    }

    public function getOtherRestrictions(): LocalizedString
    {
        return $this->otherRestrictions;
    }

    public function setRouteRestrictions(LocalizedString $routeRestrictions): static
    {
        $this->routeRestrictions = $routeRestrictions;

        return $this;
    }

    public function getRouteRestrictions(): LocalizedString
    {
        return $this->routeRestrictions;
    }

    public function setRouteRestrictionsDetails(LocalizedString $routeRestrictionsDetails): static
    {
        $this->routeRestrictionsDetails = $routeRestrictionsDetails;

        return $this;
    }

    public function getRouteRestrictionsDetails(): LocalizedString
    {
        return $this->routeRestrictionsDetails;
    }

    public function setTimeRestrictions(LocalizedString $timeRestrictions): static
    {
        $this->timeRestrictions = $timeRestrictions;

        return $this;
    }

    public function getTimeRestrictions(): LocalizedString
    {
        return $this->timeRestrictions;
    }
}
