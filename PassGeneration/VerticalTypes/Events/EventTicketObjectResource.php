<?php

namespace PassGeneration\VerticalTypes\Events;

use PassGeneration\AddMessageRequest as AddMessageRequest;
use Google\Service\Resource as GoogleResource;
use Google\Exception as GoogleException;
use GuzzleHttp\Psr7\Request as GuzzleHttpRequest;

/**
 * Class EventTicketObjectResource
 *
 * The "eventticketobject" collection of methods.
 * Typical usage is:
 *
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $eventTicketObject = $walletobjectsService->eventTicketObject;
 */
class EventTicketObjectResource extends GoogleResource
{
    /**
     * Adds a message to the event ticket object referenced by the given object ID.
     * (eventticketobject.addmessage)
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
            EventTicketObjectAddMessageResponse::class
        );
    }

    /**
     * Returns the event ticket object with the given object ID.
     * (eventticketobject.get)
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
            EventTicketObject::class
        );
    }

    /**
     * Inserts an event ticket object with the given ID and properties.
     * (eventticketobject.insert)
     *
     * @param EventTicketObject $postBody
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function insert(
        EventTicketObject $postBody,
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
            EventTicketObject::class
        );
    }

    /**
     * Returns a list of all event ticket objects for a given issuer ID.
     * (eventticketobject.listEventticketobject)
     *
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function listEventTicketObject(
        array $optionalParameters = []
    ): GuzzleHttpRequest
    {
        return $this->call(
            'list',
            $optionalParameters,
            EventTicketObjectListResponse::class
        );
    }

    /**
     * Modifies linked offer objects for the event ticket object with the given ID.
     * (eventticketobject.modifyLinkedOfferObjects)
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
    public function modifyLinkedOfferObjects(
        string $resourceId,
        ModifyLinkedOfferObjectsRequest $postBody,
        array $optionalParameters = []
    ): GuzzleHttpRequest {
        return $this->call(
            'modifyLinkedOfferObjects',
            array_values(array_merge(
                [
                    'resourceId' => $resourceId,
                    'postBody' => $postBody,
                ],
                $optionalParameters
            )),
            EventTicketObject::class
        );
    }

    /**
     * Updates the event ticket object referenced by the given object ID. This
     * method supports patch semantics. (eventticketobject.patch)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param EventTicketObject $postBody
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function patch(
        string $resourceId,
        EventTicketObject $postBody,
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
            EventTicketObject::class
        );
    }

    /**
     * Updates the event ticket object referenced by the given object ID.
     * (eventticketobject.update)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param EventTicketObject $postBody
     * @param array $optionalParameters
     * @return GuzzleHttpRequest
     * @throws GoogleException
     */
    public function update(
        string $resourceId,
        EventTicketObject $postBody,
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
            EventTicketObject::class
        );
    }
}
