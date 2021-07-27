<?php

namespace PassGeneration\VerticalTypes\Loyalty;

use PassGeneration\AddMessageRequest as AddMessageRequest;
use PassGeneration\VerticalTypes\Events\ModifyLinkedOfferObjectsRequest;
use Google\Exception as GoogleException;
use Google\Service\Resource as GoogleResource;
use GuzzleHttp\Psr7\Request as GuzzleHttpRequest;

/**
 * Class LoyaltyObjectResource
 *
 * The "loyaltyobject" collection of methods.
 * Typical usage is:
 *
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $loyaltyObject = $walletobjectsService->loyaltyObject;
 */
class LoyaltyObjectResource extends GoogleResource
{
    /**
     * Adds a message to the loyalty object referenced by the given object ID.
     * (loyaltyobject.addmessage)
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
            LoyaltyObjectAddMessageResponse::class
        );
    }

    /**
     * Returns the loyalty object with the given object ID. (loyaltyobject.get)
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
            LoyaltyObject::class
        );
    }

    /**
     * Inserts an loyalty object with the given ID and properties.
     * (loyaltyobject.insert)
     *
     * @param LoyaltyObject $postBody
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function insert(
        LoyaltyObject $postBody,
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
            LoyaltyObject::class
        );
    }

    /**
     * Returns a list of all loyalty objects for a given issuer ID.
     * (loyaltyobject.listLoyaltyobject)
     *
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function listLoyaltyObject(array $optionalParameters = []): GuzzleHttpRequest
    {
        return $this->call(
            'list',
            $optionalParameters,
            LoyaltyObjectListResponse::class
        );
    }

    /**
     * Modifies linked offer objects for the loyalty object with the given ID.
     * (loyaltyobject.modifylinkedofferobjects)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param ModifyLinkedOfferObjectsRequest $postBody
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function modifylinkedofferobjects(
        string $resourceId,
        ModifyLinkedOfferObjectsRequest $postBody,
        array $optionalParameters = []
    ): GuzzleHttpRequest {
        return $this->call(
            'modifylinkedofferobjects',
            array_values(array_merge(
                [
                    'resourceId' => $resourceId,
                    'postBody' => $postBody,
                ],
                $optionalParameters
            )),
            LoyaltyObject::class
        );
    }

    /**
     * Updates the loyalty object referenced by the given object ID. This method
     * supports patch semantics. (loyaltyobject.patch)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param LoyaltyObject $postBody
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function patch(
        string $resourceId,
        LoyaltyObject $postBody,
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
            LoyaltyObject::class
        );
    }

    /**
     * Updates the loyalty object referenced by the given object ID.
     * (loyaltyobject.update)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param LoyaltyObject $postBody
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function update(
        string $resourceId,
        LoyaltyObject $postBody,
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
            LoyaltyObject::class
        );
    }
}
