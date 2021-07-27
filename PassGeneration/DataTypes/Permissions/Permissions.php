<?php

namespace PassGeneration\DataTypes\Permissions;

use Google\Collection as GoogleCollection;
use PassGeneration\DataTypes\Permission as GooglePermission;

class Permissions extends GoogleCollection
{
    /**
     * @var string|null
     */
    protected $collection_key = 'permissions';
    /**
     * @var string|null
     */
    public string|null $issuerId = null;
    /**
     * @var GooglePermission|null[]
     */
    public array|null $permissions = null;

    public function setIssuerId(string $issuerId): static
    {
        $this->issuerId = $issuerId;

        return $this;
    }

    public function getIssuerId(): string
    {
        return $this->issuerId;
    }

    public function setPermissions(array $permissions): static
    {
        $this->permissions = $permissions;

        return $this;
    }

    public function getPermissions(): array
    {
        return $this->permissions;
    }
}
