<?php

namespace PassGeneration\VerticalTypes\Issuers;

use Google\Service\Resource as GoogleResource;
use Google\Exception as GoogleException;
use GuzzleHttp\Psr7\Request as GuzzleHttpRequest;

/**
 * Class IssuerResource
 *
 * The "issuer" collection of methods.
 * Typical usage is:
 *
 *   $walletObjectsService = new WalletObjectsService(...);
 *   $issuer = $walletObjectsService->issuer;
 */
class IssuerResource extends GoogleResource
{
    /**
     * Returns the issuer with the given issuer ID. (issuer.get)
     *
     * @param string $resourceId The unique identifier for an issuer.
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
            Issuer::class
        );
    }

    /**
     * Inserts an issuer with the given ID and properties. (issuer.insert)
     *
     * @param Issuer $postBody
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function insert(
        Issuer $postBody,
        array $optionalParameters = []
    ): GuzzleHttpRequest {
        return $this->call(
            'insert',
            array_values(array_merge(
                [
                    'postBody' => $postBody,
                ],
                $optionalParameters
            )),
            Issuer::class
        );
    }

    /**
     * Returns a list of all issuers shared to the caller. (issuer.listIssuer)
     *
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function listIssuer(array $optionalParameters = []): GuzzleHttpRequest
    {
        return $this->call(
            'list',
            $optionalParameters,
            IssuerListResponse::class
        );
    }

    /**
     * Updates the issuer referenced by the given issuer ID. This method supports
     * patch semantics. (issuer.patch)
     *
     * @param string $resourceId The unique identifier for an issuer.
     * @param Issuer $postBody
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function patch(
        string $resourceId,
        Issuer $postBody,
        array $optionalParameters = []
    ): GuzzleHttpRequest {
        return $this->call(
            'patch',
            array_values(array_merge(
                [
                    'resourceId' => $resourceId,
                    'postBody' => $postBody,
                ],
                $optionalParameters
            )),
            Issuer::class
        );
    }

    /**
     * Updates the issuer referenced by the given issuer ID. (issuer.update)
     *
     * @param string $resourceId The unique identifier for an issuer.
     * @param Issuer $postBody
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function update(
        string $resourceId,
        Issuer $postBody,
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
            Issuer::class
        );
    }
}
