<?php

namespace PassGeneration\DataTypes;

use Google\Model as GoogleModel;

class Permission extends GoogleModel
{
    public string|null $emailAddress = null;
    public string|null $role = null;

    public function setEmailAddress(string $emailAddress): static
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    public function setRole(string $role): static
    {
        $this->role = $role;

        return $this;
    }

    public function getRole(): string
    {
        return $this->role;
    }
}
