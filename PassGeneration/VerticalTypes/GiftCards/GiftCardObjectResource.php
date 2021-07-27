<?php

namespace PassGeneration\VerticalTypes\GiftCards;

use PassGeneration\AddMessageRequest as AddMessageRequest;
use Google\Service\Resource as GoogleResource;
use Google\Exception as GoogleException;
use GuzzleHttp\Psr7\Request as GuzzleHttpRequest;

/**
 * Class GiftCardObjectResource
 *
 * The "giftcardobject" collection of methods.
 * Typical usage is:
 *
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $giftCardObject = $walletobjectsService->giftCardObject;
 */
class GiftCardObjectResource extends GoogleResource
{
    /**
     * Adds a message to the gift card object referenced by the given object ID.
     * (giftcardobject.addmessage)
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
            GiftCardObjectAddMessageResponse::class
        );
    }

    /**
     * Returns the gift card object with the given object ID. (giftcardobject.get)
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
            GiftCardObject::class
        );
    }

    /**
     * Inserts an gift card object with the given ID and properties.
     * (giftcardobject.insert)
     *
     * @param GiftCardObject $postBody
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function insert(
        GiftCardObject $postBody,
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
            GiftCardObject::class
        );
    }

    /**
     * Returns a list of all gift card objects for a given issuer ID.
     * (giftcardobject.listGiftcardobject)
     *
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function listGiftCardObject(array $optionalParameters = []): GuzzleHttpRequest
    {
        return $this->call(
            'list',
            $optionalParameters,
            GiftCardObjectListResponse::class
        );
    }

    /**
     * Updates the gift card object referenced by the given object ID. This method
     * supports patch semantics. (giftcardobject.patch)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param GiftCardObject $postBody
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function patch(
        string $resourceId,
        GiftCardObject $postBody,
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
            GiftCardObject::class
        );
    }

    /**
     * Updates the gift card object referenced by the given object ID.
     * (giftcardobject.update)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param GiftCardObject $postBody
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function update(
        string $resourceId,
        GiftCardObject $postBody,
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
            GiftCardObject::class
        );
    }
}
