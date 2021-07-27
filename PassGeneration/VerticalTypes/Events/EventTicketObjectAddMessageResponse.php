<?php

namespace PassGeneration\VerticalTypes\Events;

use Google\Model as GoogleModel;

class EventTicketObjectAddMessageResponse extends GoogleModel
{
    public EventTicketObject|null $resource = null;

    public function setResource(EventTicketObject $resource): static
    {
        $this->resource = $resource;

        return $this;
    }

    public function getResource(): EventTicketObject
    {
        return $this->resource;
    }
}
