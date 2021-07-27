<?php

namespace PassGeneration\VerticalTypes\Issuers;

use Google\Collection as GoogleCollection;

class IssuerContactInfo extends GoogleCollection
{
    /**
     * @var string|null
     */
    protected $collection_key = 'alertsEmails';
    /**
     * @var array|null
     */
    public array $alertsEmails = [];
    /**
     * @var string|null
     */
    public string|null $email = null;
    /**
     * @var string|null
     */
    public string|null $name = null;
    /**
     * @var string|null
     */
    public string|null $phone = null;

    public function setAlertsEmails(array $alertsEmails): static
    {
        $this->alertsEmails = $alertsEmails;

        return $this;
    }

    public function getAlertsEmails(): array
    {
        return $this->alertsEmails;
    }

    public function setEmail($email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setPhone($phone): static
    {
        $this->phone = $phone;

        return $this;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }
}
