<?php

namespace PassGeneration\Jwt;

use Google\Exception as GoogleException;
use Google\Service\Resource as GoogleResource;
use GuzzleHttp\Psr7\Request as GuzzleHttpRequest;

/**
 * Class JwtResource
 *
 * The "jwt" collection of methods.
 * Typical usage is:
 *
 *   $walletObjectsService = new Google_Service_Walletobjects(...);
 *   $jwt = $walletObjectsService->jwt;
 */
class JwtResource extends GoogleResource
{
    /**
     * Inserts the resources in the JWT. (jwt.insert)
     *
     * @param JwtResource $postBody
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function insert(self $postBody, array $optionalParameters = []): GuzzleHttpRequest
    {
        return $this->call(
            'insert',
            array_values(array_merge(
                [
                    'postBody' => $postBody,
                ],
                $optionalParameters
            )),
            JwtInsertResponse::class
        );
    }
}
