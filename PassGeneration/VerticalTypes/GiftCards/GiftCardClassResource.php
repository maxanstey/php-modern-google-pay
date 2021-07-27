<?php

namespace PassGeneration\VerticalTypes\GiftCards;

use PassGeneration\AddMessageRequest as AddMessageRequest;
use Google\Exception as GoogleException;
use Google\Service\Resource as GoogleResource;
use GuzzleHttp\Psr7\Request as GuzzleHttpRequest;

/**
 * Class GiftCardClassResource
 *
 * The "giftcardclass" collection of methods.
 * Typical usage is:
 *
 *  $walletobjectsService = new Google_Service_Walletobjects(...);
 *  $giftCardClass = $walletobjectsService->giftCardClass;
 */
class GiftCardClassResource extends GoogleResource
{
    /**
     * Adds a message to the gift card class referenced by the given class ID.
     * (giftcardclass.addmessage)
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
            GiftCardClassAddMessageResponse::class
        );
    }

    /**
     * Returns the gift card class with the given class ID. (giftcardclass.get)
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
            GiftCardClass::class
        );
    }

    /**
     * Inserts an gift card class with the given ID and properties.
     * (giftcardclass.insert)
     *
     * @param GiftCardClass $postBody
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function insert(
        GiftCardClass $postBody,
        array $optionalParameters = []
    ): GuzzleHttpRequest {
        return $this->call(
            'get',
            array_values(array_merge(
                [
                    'postBody' => $postBody,
                ],
                $optionalParameters
            )),
            GiftCardClass::class
        );
    }

    /**
     * Returns a list of all gift card classes for a given issuer ID.
     * (giftcardclass.listGiftcardclass)
     *
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function listGiftCardClass(array $optionalParameters = []): GuzzleHttpRequest
    {
        return $this->call(
            'list',
            $optionalParameters,
            GiftCardClassListResponse::class
        );
    }

    /**
     * Updates the gift card class referenced by the given class ID. This method
     * supports patch semantics. (giftcardclass.patch)
     *
     * @param string $resourceId The unique identifier for a class. This ID must be
     * unique across all classes from an issuer. This value should follow the format
     * issuer ID.identifier where the former is issued by Google and latter is
     * chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param GiftCardClass $postBody
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function patch(
        string $resourceId,
        GiftCardClass $postBody,
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
            GiftCardClass::class
        );
    }

    /**
     * Updates the gift card class referenced by the given class ID.
     * (giftcardclass.update)
     *
     * @param string $resourceId The unique identifier for a class. This ID must be
     * unique across all classes from an issuer. This value should follow the format
     * issuer ID.identifier where the former is issued by Google and latter is
     * chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param GiftCardClass $postBody
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function update(
        string $resourceId,
        GiftCardClass $postBody,
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
            GiftCardClass::class
        );
    }
}
