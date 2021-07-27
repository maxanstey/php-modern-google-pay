<?php

namespace PassGeneration\DataTypes\Permissions;

use Google\Service\Resource as GoogleResource;
use Google\Exception as GoogleException;
use GuzzleHttp\Psr7\Request as GuzzleHttpRequest;

/**
 * Class PermissionsResource
 *
 * The "permissions" collection of methods.
 * Typical usage is:
 *
 *   $walletObjectsService = new Google_Service_Walletobjects(...);
 *   $permissions = $walletObjectsService->permissions;
 */
class PermissionsResource extends GoogleResource
{
    /**
     * Returns the permissions for the given issuer id. (permissions.get)
     *
     * @param string $resourceId The unique identifier for an issuer. This ID must
     * be unique across all issuers.
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function get(
        string $resourceId,
        array $optionalParameters = []
    ): GuzzleHttpRequest {
        return $this->call(
            'get',
            array_values(array_merge(
                [
                    'resourceId' => $resourceId,
                ],
                $optionalParameters
            )),
            Permissions::class
        );
    }

    /**
     * Updates the permissions for the given issuer. (permissions.update)
     *
     * @param string $resourceId The unique identifier for an issuer.
     * @param Permissions $postBody
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function update(
        string $resourceId,
        Permissions $postBody,
        array $optionalParameters = []
    ): GuzzleHttpRequest {
        return $this->call(
            'update',
            array_values(array_merge(
                [
                    'resourceId' => $resourceId,
                    'postBody' => $postBody,
                ],
                $optionalParameters
            )),
            Permissions::class
        );
    }
}
