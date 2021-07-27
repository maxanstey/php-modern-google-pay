<?php

namespace PassGeneration\VerticalTypes\Transit;

use PassGeneration\AddMessageRequest as AddMessageRequest;
use Google\Service\Resource as GoogleResource;
use Google\Exception as GoogleException;
use GuzzleHttp\Psr7\Request as GuzzleHttpRequest;

/**
 * class TransitClassResource
 *
 * The "transitclass" collection of methods.
 * Typical usage is:
 *
 *  $walletobjectsService = new Google_Service_Walletobjects(...);
 *  $transitClass = $walletobjectsService->transitClass;
 */
class TransitClassResource extends GoogleResource
{

    /**
     * Adds a message to the transit class referenced by the given class ID.
     * (transitclass.addmessage)
     *
     * @param string $resourceId The unique identifier for a class. This ID must be
     * unique across all classes from an issuer. This value should follow the format
     * issuer ID.identifier where the former is issued by Google and latter is
     * chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param AddMessageRequest $postBody
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function addMessage(
        string $resourceId,
        AddMessageRequest $postBody,
        array $optionalParameters = []
    ): GuzzleHttpRequest {
        return $this->call(
            'addmessage',
            array_values(array_merge(
                [
                    'resourceId' => $resourceId,
                    'postBody' => $postBody,
                ],
                $optionalParameters
            )),
            TransitClassAddMessageResponse::class
        );
    }

    /**
     * Returns the transit class with the given class ID. (transitclass.get)
     *
     * @param string $resourceId The unique identifier for a class. This ID must be
     * unique across all classes from an issuer. This value should follow the format
     * issuer ID.identifier where the former is issued by Google and latter is
     * chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
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
            TransitClass::class
        );
    }

    /**
     * Inserts a transit class with the given ID and properties.
     * (transitclass.insert)
     *
     * @param TransitClass $postBody
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function insert(
        TransitClass $postBody,
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
            TransitClass::class
        );
    }

    /**
     * Returns a list of all transit classes for a given issuer ID.
     * (transitclass.listTransitclass)
     *
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function listTransitClass(
        array $optionalParameters = []
    ): GuzzleHttpRequest {
        return $this->call(
            'list',
            $optionalParameters,
            TransitClassListResponse::class
        );
    }

    /**
     * Updates the transit class referenced by the given class ID. This method
     * supports patch semantics. (transitclass.patch)
     *
     * @param string $resourceId The unique identifier for a class. This ID must be
     * unique across all classes from an issuer. This value should follow the format
     * issuer ID.identifier where the former is issued by Google and latter is
     * chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param TransitClass $postBody
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function patch(
        string $resourceId,
        TransitClass $postBody,
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
            TransitClass::class
        );
    }

    /**
     * Updates the transit class referenced by the given class ID.
     * (transitclass.update)
     *
     * @param string $resourceId The unique identifier for a class. This ID must be
     * unique across all classes from an issuer. This value should follow the format
     * issuer ID.identifier where the former is issued by Google and latter is
     * chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param TransitClass $postBody
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function update(
        string $resourceId,
        TransitClass $postBody,
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
            TransitClass::class
        );
    }
}
