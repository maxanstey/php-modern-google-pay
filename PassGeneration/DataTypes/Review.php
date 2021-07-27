<?php

namespace PassGeneration\DataTypes;

use Google\Model as GoogleModel;

class Review extends GoogleModel
{
    public mixed $comments = null;

    public function setComments($comments): static
    {
        $this->comments = $comments;

        return $this;
    }

    public function getComments(): mixed
    {
        return $this->comments;
    }
}
