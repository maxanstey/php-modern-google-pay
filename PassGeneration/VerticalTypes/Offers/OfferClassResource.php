<?php

namespace PassGeneration\VerticalTypes\Offers;

use PassGeneration\AddMessageRequest as AddMessageRequest;
use Google\Service\Resource as GoogleResource;
use Google\Exception as GoogleException;
use GuzzleHttp\Psr7\Request as GuzzleHttpRequest;
use PassGeneration\Enums\ResourceMethod;

/**
 * Class OfferClassResource
 *
 * The "offerclass" collection of methods.
 * Typical usage is:
 *
 *  $walletobjectsService = new WalletObjectsService(...);
 *  $offerClass = $walletobjectsService->offerClass;
 */
class OfferClassResource extends GoogleResource
{
    public function getMethods(): array
    {
        return ResourceMethod::OFFER_CLASS_RESOURCE_METHODS;
    }
    
    /**
     * Adds a message to the offer class referenced by the given class ID.
     * (offerclass.addmessage)
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
            OfferClassAddMessageResponse::class
        );
    }

    /**
     * Returns the offer class with the given class ID. (offerclass.get)
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
            OfferClass::class
        );
    }

    /**
     * Inserts an offer class with the given ID and properties. (offerclass.insert)
     *
     * @param OfferClass $postBody
     * @param array $optionalParameters
     * @return GuzzleHttpRequest|OfferClass
     * @throws GoogleException
     */
    public function insert(
        OfferClass $postBody,
        array $optionalParameters = []
    ): GuzzleHttpRequest|OfferClass {
        return $this->call(
            'insert',
            [array_merge(
                [
                    'postBody' => $postBody,
                ],
                $optionalParameters
            )],
            OfferClass::class
        );
    }

    /**
     * Returns a list of all offer classes for a given issuer ID.
     * (offerclass.listOfferclass)
     *
     * @param array $optionalParameters
     * list. All results are returned if `maxResults` isn't defined.
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function listOfferClass(
        array $optionalParameters = []
    ): GuzzleHttpRequest {
        return $this->call(
            'list',
            $optionalParameters,
            OfferClassListResponse::class
        );
    }

    /**
     * Updates the offer class referenced by the given class ID. This method
     * supports patch semantics. (offerclass.patch)
     *
     * @param string $resourceId The unique identifier for a class. This ID must be
     * unique across all classes from an issuer. This value should follow the format
     * issuer ID.identifier where the former is issued by Google and latter is
     * chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param OfferClass $postBody
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function patch(
        string $resourceId,
        OfferClass $postBody,
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
            OfferClass::class
        );
    }

    /**
     * Updates the offer class referenced by the given class ID. (offerclass.update)
     *
     * @param string $resourceId The unique identifier for a class. This ID must be
     * unique across all classes from an issuer. This value should follow the format
     * issuer ID.identifier where the former is issued by Google and latter is
     * chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param OfferClass $postBody
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function update(
        string $resourceId,
        OfferClass $postBody,
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
            OfferClass::class
        );
    }
}
