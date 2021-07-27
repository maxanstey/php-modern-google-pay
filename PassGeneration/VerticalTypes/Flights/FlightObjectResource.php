<?php

namespace PassGeneration\VerticalTypes\Flights;

use PassGeneration\AddMessageRequest as AddMessageRequest;
use Google\Exception as GoogleException;
use Google\Service\Resource as GoogleResource;
use GuzzleHttp\Psr7\Request as GuzzleHttpRequest;

/**
 * Class FlightObjectResource
 *
 * The "flightobject" collection of methods.
 * Typical usage is:
 *
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $flightObject = $walletobjectsService->flightObject;
 */
class FlightObjectResource extends GoogleResource
{
    /**
     * Adds a message to the flight object referenced by the given object ID.
     * (flightobject.addmessage)
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
            FlightObjectAddMessageResponse::class
        );
    }

    /**
     * Returns the flight object with the given object ID. (flightobject.get)
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
            FlightObject::class
        );
    }

    /**
     * Inserts an flight object with the given ID and properties.
     * (flightobject.insert)
     *
     * @param FlightObject $postBody
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function insert(
        FlightObject $postBody,
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
            FlightObject::class
        );
    }

    /**
     * Returns a list of all flight objects for a given issuer ID.
     * (flightobject.listFlightobject)
     *
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function listFlightObject(array $optionalParameters = []): GuzzleHttpRequest
    {
        return $this->call(
            'list',
            $optionalParameters,
            FlightObjectListResponse::class
        );
    }

    /**
     * Updates the flight object referenced by the given object ID. This method
     * supports patch semantics. (flightobject.patch)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param FlightObject $postBody
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function patch(
        string $resourceId,
        FlightObject $postBody,
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
            FlightObject::class
        );
    }

    /**
     * Updates the flight object referenced by the given object ID.
     * (flightobject.update)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param FlightObject $postBody
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function update(
        string $resourceId,
        FlightObject $postBody,
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
            FlightObject::class
        );
    }
}
