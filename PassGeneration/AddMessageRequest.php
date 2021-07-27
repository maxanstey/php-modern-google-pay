<?php

namespace PassGeneration;

use PassGeneration\DataTypes\Message as GoogleMessage;
use Google\Model as GoogleModel;

class AddMessageRequest extends GoogleModel
{
    public GoogleMessage|null $message = null;

    public function setMessage(GoogleMessage $message): static
    {
        $this->message = $message;

        return $this;
    }

    public function getMessage(): GoogleMessage
    {
        return $this->message;
    }
}
