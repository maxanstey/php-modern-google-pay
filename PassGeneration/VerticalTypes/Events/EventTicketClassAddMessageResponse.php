<?php

namespace PassGeneration\VerticalTypes\Events;

use Google\Model as GoogleModel;

class EventTicketClassAddMessageResponse extends GoogleModel
{
    public EventTicketClass|null $resource = null;

    public function setResource(EventTicketClass $resource): static
    {
        $this->resource = $resource;

        return $this;
    }

    public function getResource(): EventTicketClass
    {
        return $this->resource;
    }
}
