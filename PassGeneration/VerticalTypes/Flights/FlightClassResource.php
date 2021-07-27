<?php

namespace PassGeneration\VerticalTypes\Flights;

use PassGeneration\AddMessageRequest as AddMessageRequest;
use Google\Exception as GoogleException;
use Google\Service\Resource as GoogleResource;
use GuzzleHttp\Psr7\Request as GuzzleHttpRequest;

/**
 * Class FlightClassResource
 *
 * The "flightclass" collection of methods.
 * Typical usage is:
 *
 *  $walletobjectsService = new WalletObjectsService(...);
 *  $flightClass = $walletobjectsService->flightClass;
 */
class FlightClassResource extends GoogleResource
{
    /**
     * Adds a message to the flight class referenced by the given class ID.
     * (flightclass.addmessage)
     *
     * @param string $resourceId The unique identifier for a class. This ID must be
     * unique across all classes from an issuer. This value should follow the format
     * issuer ID.identifier where the former is issued by Google and latter is
     * chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param AddMessageRequest $postBody
     * @param array $optionalParameters.
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
            FlightClassAddMessageResponse::class
        );
    }

    /**
     * Returns the flight class with the given class ID. (flightclass.get)
     *
     * @param string $resourceId The unique identifier for a class. This ID must be
     * unique across all classes from an issuer. This value should follow the format
     * issuer ID.identifier where the former is issued by Google and latter is
     * chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param array $optionalParameters.
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
            FlightClass::class
        );
    }

    /**
     * Inserts an flight class with the given ID and properties.
     * (flightclass.insert)
     *
     * @param FlightClass $postBody
     * @param array $optionalParameters.
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function insert(
        FlightClass $postBody,
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
            FlightClass::class
        );
    }

    /**
     * Returns a list of all flight classes for a given issuer ID.
     * (flightclass.listFlightclass)
     *
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function listFlightClass(array $optionalParameters = []): GuzzleHttpRequest
    {
        return $this->call(
            'list',
            $optionalParameters,
            FlightClassListResponse::class
        );
    }

    /**
     * Updates the flight class referenced by the given class ID. This method
     * supports patch semantics. (flightclass.patch)
     *
     * @param string $resourceId The unique identifier for a class. This ID must be
     * unique across all classes from an issuer. This value should follow the format
     * issuer ID.identifier where the former is issued by Google and latter is
     * chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param FlightClass $postBody
     * @param array $optionalParameters .
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function patch(
        string $resourceId,
        FlightClass $postBody,
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
            FlightClass::class
        );
    }

    /**
     * Updates the flight class referenced by the given class ID.
     * (flightclass.update)
     *
     * @param string $resourceId The unique identifier for a class. This ID must be
     * unique across all classes from an issuer. This value should follow the format
     * issuer ID.identifier where the former is issued by Google and latter is
     * chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param FlightClass $postBody
     * @param array $optionalParameters .
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function update(
        string $resourceId,
        FlightClass $postBody,
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
            FlightClass::class
        );
    }
}
