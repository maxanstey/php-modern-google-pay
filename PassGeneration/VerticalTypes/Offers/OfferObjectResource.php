<?php

namespace PassGeneration\VerticalTypes\Offers;

use PassGeneration\AddMessageRequest as AddMessageRequest;
use Google\Service\Resource as GoogleResource;
use Google\Exception as GoogleException;
use GuzzleHttp\Psr7\Request as GuzzleHttpRequest;

/**
 * Class OfferObjectResource
 *
 * The "offerobject" collection of methods.
 * Typical usage is:
 *
 *   $walletobjectsService = new WalletObjectsService(...);
 *   $offerObject = $walletobjectsService->offerObject;
 */
class OfferObjectResource extends GoogleResource
{

    /**
     * Adds a message to the offer object referenced by the given object ID.
     * (offerobject.addmessage)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
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
            OfferObjectAddMessageResponse::class
        );
    }

    /**
     * Returns the offer object with the given object ID. (offerobject.get)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
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
            OfferObject::class
        );
    }

    /**
     * Inserts an offer object with the given ID and properties.
     * (offerobject.insert)
     *
     * @param OfferObject $postBody
     * @param array $optionalParameters
     * @return GuzzleHttpRequest|OfferObject
     * @throws GoogleException
     */
    public function insert(
        OfferObject $postBody,
        array $optionalParameters = []
    ): GuzzleHttpRequest|OfferObject {
        return $this->call(
            'insert',
            [array_merge(
                [
                    'postBody' => $postBody,
                ],
                $optionalParameters
            )],
            OfferObject::class
        );
    }

    /**
     * Returns a list of all offer objects for a given issuer ID.
     * (offerobject.listOfferobject)
     *
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function listOfferObject(
        array $optionalParameters = []
    ): GuzzleHttpRequest {
        return $this->call(
            'list',
            $optionalParameters,
            OfferObjectListResponse::class
        );
    }

    /**
     * Updates the offer object referenced by the given object ID. This method
     * supports patch semantics. (offerobject.patch)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param OfferObject $postBody
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function patch(
        string $resourceId,
        OfferObject $postBody,
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
            OfferObject::class
        );
    }

    /**
     * Updates the offer object referenced by the given object ID.
     * (offerobject.update)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param OfferObject $postBody
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function update(
        string $resourceId,
        OfferObject $postBody,
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
            OfferObject::class
        );
    }
}
