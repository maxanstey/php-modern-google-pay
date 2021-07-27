<?php

namespace PassGeneration;

use PassGeneration\VerticalTypes\Events\EventSeat;
use PassGeneration\VerticalTypes\Events\EventTicketClass;
use PassGeneration\VerticalTypes\Events\EventTicketObject;
use PassGeneration\VerticalTypes\Flights\AirportInfo;
use PassGeneration\VerticalTypes\Flights\FlightClass;
use PassGeneration\VerticalTypes\Flights\FlightObject;
use PassGeneration\VerticalTypes\GiftCards\GiftCardClass;
use PassGeneration\VerticalTypes\GiftCards\GiftCardObject;
use PassGeneration\DataTypes\Images\Image;
use PassGeneration\DataTypes\Images\ImageUri;
use PassGeneration\VerticalTypes\Loyalty\LoyaltyClass;
use PassGeneration\VerticalTypes\Loyalty\LoyaltyObject;
use PassGeneration\VerticalTypes\Offers\OfferClass;
use PassGeneration\VerticalTypes\Offers\OfferObject;
use PassGeneration\VerticalTypes\Transit\TransitClass;
use PassGeneration\VerticalTypes\Transit\TransitObject;
use PassGeneration\DataTypes\Barcodes\Barcode;

/**
 * Class ResourceDefinitions
 *
 * Copyright 2019 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * Class ResourceDefinitions
 */
class ResourceDefinitions
{
    /** Define an Offer Class
     *
     * See https://developers.google.com/pay/passes/reference/v1/offerclass
     *
     * @param string $classId The unique identifier for a class
     * @return OfferClass $payload object representing OfferClass resource
     */
    public static function makeOfferClass(string $classId): OfferClass
    {
        // Define the resource representation of the Class
        // values should be from your DB/services; here we hardcode information
        // below defines an offer class. For more properties, check:
        //// https://developers.google.com/pay/passes/reference/v1/offerclass/insert
        //// https://developers.google.com/pay/passes/guides/pass-verticals/offers/design

        // There is a client lib to help make the data structure. Newest client is on devsite:
        //// https://developers.google.com/pay/passes/support/libraries#libraries
        $titleImageUri = new ImageUri();
        $titleImageUri->setUri("http://farm4.staticflickr.com/3723/11177041115_6e6a3b6f49_o.jpg");
        $titleImage = new Image();
        $titleImage->setSourceUri($titleImageUri);
        $payload = new OfferClass();
        //required properties
        $payload->setId($classId);
        $payload->setIssuerName("Baconrista Coffee");
        $payload->setProvider("Baconrista Deals");
        $payload->setRedemptionChannel("online");
        $payload->setReviewStatus("underReview");
        $payload->setTitle("20% off one bacon fat latte");
        // optional.  Check design and reference api to decide what's desirable
        $payload->setTitleImage($titleImage);

        return $payload;
    }

    /** Define an Offer Object
     *
     * See https://developers.google.com/pay/passes/reference/v1/offerobject
     *
     * @param string $classId The unique identifier for a class
     * @param string $objectId The unique identifier for an object
     * @return OfferObject $payload object representing OfferObject resource
     */
    public static function makeOfferObjectResource($classId, $objectId)
    {
        // Define the resource representation of the Object
        // values should be from your DB/services; here we hardcode information
        // below defines an offer object. For more properties, check:
        //// https://developers.google.com/pay/passes/reference/v1/offerobject/insert
        //// https://developers.google.com/pay/passes/guides/pass-verticals/offers/design

        // There is a client lib to help make the data structure. Newest client is on devsite:
        //// https://developers.google.com/pay/passes/support/libraries#libraries
        // Define Barcodes
        $barcode = new Barcode();
        $barcode->setType("qrCode");
        $barcode->setValue("1234abc");
        $barcode->setAlternateText("optional alternate text");

        // Define offer object
        $payload = new OfferObject();
        // required properties
        $payload->setClassId($classId);
        $payload->setId($objectId);
        $payload->setState("active");
        // optional.  Check design and reference api to decide what's desirable
        $payload->setBarcode($barcode);

        return $payload;
    }

    /** Define an EventTicket Class
     *
     * See https://developers.google.com/pay/passes/reference/v1/eventticketclass
     *
     * @param string $classId The unique identifier for a class
     * @return EventTicketClass $payload object representing EventTicketClass resource
     */
    public static function makeEventTicketClass($classId)
    {
        // Define the resource representation of the Class
        // values should be from your DB/services; here we hardcode information
        // below defines an eventticket class. For more properties, check:
        //// https://developers.google.com/pay/passes/reference/v1/eventticketclass/insert
        //// https://developers.google.com/pay/passes/guides/pass-verticals/event-tickets/design

        // There is a client lib to help make the data structure. Newest client is on devsite:
        //// https://developers.google.com/pay/passes/support/libraries#libraries
        $localEventName = new LocalizedString();
        $localEventNameTranslated = new TranslatedString();
        $localEventNameTranslated->setLanguage("en-US");
        $localEventNameTranslated->setValue("Bacon Coffee Fun Event");
        $localEventName->setDefaultValue($localEventNameTranslated);

        $location = new LatLongPoint();
        $location->setLatitude(37.424015499999996);
        $location->setLongitude(-122.09259560000001);
        $locations = array($location);

        $logoUri = new ImageUri();
        $logoUri->setUri("https://farm8.staticflickr.com/7340/11177041185_a61a7f2139_o.jpg");
        $logoUri->setDescription("Baconrista stadium logo");
        $logoImage = new Image();
        $logoImage->setSourceUri($logoUri);

        $localVenueName = new LocalizedString();
        $localVenueNameTranslated = new TranslatedString();
        $localVenueNameTranslated->setLanguage("en-US");
        $localVenueNameTranslated->setValue("Baconrista Stadium");
        $localVenueName->setDefaultValue($localVenueNameTranslated);
        $localVenueAddress = new LocalizedString();
        $localVenueAddressTranslated = new TranslatedString();
        $localVenueAddressTranslated->setLanguage("en-US");
        $localVenueAddressTranslated->setValue("101 Baconrista Dr.");
        $localVenueAddress->setDefaultValue($localVenueAddressTranslated);
        $localEventVenue = new EventVenue();
        $localEventVenue->setName($localVenueName);
        $localEventVenue->setAddress($localVenueAddress);

        $eventDateTime = new EventDateTime();
        $eventDateTime->setStart("2023-04-12T11:20:50.52Z");
        $eventDateTime->setEnd("2023-04-12T16:20:50.52Z");

        $textModulesData = new TextModuleData();
        $textModulesData->setBody("Baconrista events have pushed the limits since its founding.");
        $textModulesData->setHeader("Custom Details");
        $textModulesDatas = array($textModulesData);

        $locationUri = new Uri();
        $locationUri->setUri("http://maps.google.com/");
        $locationUri->setDescription("Nearby Locations");
        $telephoneUri = new Uri();
        $telephoneUri->setUri("tel:6505555555");
        $telephoneUri->setDescription("Call Customer Service");
        $linksModuleData = new LinksModuleData();
        $linksModuleData->setUris($locationUri, $telephoneUri);

        $payload = new EventTicketClass();
        //required properties
        $payload->setId($classId);
        $payload->setIssuerName("Baconrista Stadium");
        $payload->setReviewStatus("underReview");
        $payload->setEventName($localEventName);
        // optional.  Check design and reference api to decide what's desirable
        $payload->setLocations($locations);
        $payload->setLogo($logoImage);
        $payload->setVenue($localEventVenue);
        $payload->setDateTime($eventDateTime);
        $payload->setTextModulesData($textModulesDatas);
        $payload->setLinksModuleData($linksModuleData);

        return $payload;
    }

    /** Define an EventTicket Object
     *
     * See https://developers.google.com/pay/passes/reference/v1/eventticketobject
     *
     * @param string $classId The unique identifier for a class
     * @param string $objectId The unique identifier for an object
     * @return EventTicketObject $payload object representing EventTicketObject resource
     */
    public static function makeEventTicketObjectResource($classId, $objectId)
    {
        // Define the resource representation of the Object
        // values should be from your DB/services; here we hardcode information
        // below defines an eventticket object. For more properties, check:
        //// https://developers.google.com/pay/passes/reference/v1/eventticketobject/insert
        //// https://developers.google.com/pay/passes/guides/pass-verticals/event-tickets/design

        // There is a client lib to help make the data structure. Newest client is on devsite:
        //// https://developers.google.com/pay/passes/support/libraries#libraries
        // Define Barcodes
        $barcode = new Barcode();
        $barcode->setType("qrCode");
        $barcode->setValue("1234abc");
        $barcode->setAlternateText("optional alternate text");

        $localSeatValue = new LocalizedString();
        $localSeatValueTranslated = new TranslatedString();
        $localSeatValueTranslated->setLanguage("en-US");
        $localSeatValueTranslated->setValue("42");
        $localSeatValue->setDefaultValue($localSeatValueTranslated);
        $localRowValue = new LocalizedString();
        $localRowValueTranslated = new TranslatedString();
        $localRowValueTranslated->setLanguage("en-US");
        $localRowValueTranslated->setValue("G3");
        $localRowValue->setDefaultValue($localRowValueTranslated);
        $localSectionValue = new LocalizedString();
        $localSectionValueTranslated = new TranslatedString();
        $localSectionValueTranslated->setLanguage("en-US");
        $localSectionValueTranslated->setValue("G3");
        $localSectionValue->setDefaultValue($localSectionValueTranslated);
        $localGateValue = new LocalizedString();
        $localGateValueTranslated = new TranslatedString();
        $localGateValueTranslated->setLanguage("en-US");
        $localGateValueTranslated->setValue("A");
        $localGateValue->setDefaultValue($localGateValueTranslated);
        $eventSeat = new EventSeat();
        $eventSeat->setSeat($localSeatValue);
        $eventSeat->setRow($localRowValue);
        $eventSeat->setSection($localSectionValue);
        $eventSeat->setGate($localGateValue);


        // Define eventticket object
        $payload = new EventTicketObject();
        // required fields
        $payload->setClassId($classId);
        $payload->setId($objectId);
        $payload->setState("active");
        // optional.  Check design and reference api to decide what's desirable
        $payload->setBarcode($barcode);
        $payload->setSeatInfo($eventSeat);
        $payload->setTicketHolderName("Sir Bacon IV");
        $payload->setTicketNumber("123abc");

        return $payload;
    }

    /** Define an Flight Class
     *
     * See https://developers.google.com/pay/passes/reference/v1/flightclass
     *
     * @param string $classId The unique identifier for a class
     * @return FlightClass $payload object representing FlightClass resource
     */
    public static function makeFlightClass($classId)
    {
        // Define the resource representation of the Class
        // values should be from your DB/services; here we hardcode information
        // below defines an flight class. For more properties, check:
        //// https://developers.google.com/pay/passes/reference/v1/flightclass/insert
        //// https://developers.google.com/pay/passes/guides/pass-verticals/boarding-passes/design

        // There is a client lib to help make the data structure. Newest client is on devsite:
        //// https://developers.google.com/pay/passes/support/libraries#libraries

        $destination = new AirportInfo();
        $destination->setAirportIataCode("SFO");
        $destination->setGate("C3");
        $destination->setTerminal("2");

        $origin = new AirportInfo();
        $origin->setAirportIataCode("LAX");
        $origin->setGate("A2");
        $origin->setTerminal("4");

        $flightCarrier = new FlightCarrier();
        $flightCarrier->setCarrierIataCode("LX");
        $flightHeader = new FlightHeader();
        $flightHeader->setFlightNumber("123");
        $flightHeader->setCarrier($flightCarrier);

        $location = new LatLongPoint();
        $location->setLatitude(37.424015499999996);
        $location->setLongitude(-122.09259560000001);
        $locations = array($location);

        $textModulesData = new TextModuleData();
        $textModulesData->setBody("Baconrista flights has served snacks in-flight since its founding.");
        $textModulesData->setHeader("Custom Flight Details");
        $textModulesDatas = array($textModulesData);

        $locationUri = new Uri();
        $locationUri->setUri("http://maps.google.com/");
        $locationUri->setDescription("Nearby Locations");
        $telephoneUri = new Uri();
        $telephoneUri->setUri("tel:6505555555");
        $telephoneUri->setDescription("Call Customer Service");
        $linksModuleData = new LinksModuleData();
        $linksModuleData->setUris(array($locationUri, $telephoneUri));

        $imageUri = new ImageUri();
        $imageUri->setUri("https://farm8.staticflickr.com/7340/11177041185_a61a7f2139_o.jpg");
        $imageUri->setDescription("Baconrista flights image");
        $image = new Image();
        $image->setSourceUri($imageUri);
        $imageModulesData = new ImageModuleData();
        $imageModulesData->setMainImage($image);

        $payload = new FlightClass();
        //required properties
        $payload->setId($classId);
        $payload->setIssuerName("Baconrista Flights");
        $payload->setReviewStatus("underReview");
        $payload->setDestination($destination);
        $payload->setOrigin($origin);
        $payload->setFlightHeader($flightHeader);
        $payload->setLocalScheduledDepartureDateTime("2023-07-02T15:30:00");
        // optional.  Check design and reference api to decide what's desirable
        $payload->setLocations($locations);
        $payload->setTextModulesData($textModulesDatas);
        $payload->setLinksModuleData($linksModuleData);
        $payload->setImageModulesData($imageModulesData);

        return $payload;
    }

    /** Define an Flight Object
     *
     * See https://developers.google.com/pay/passes/reference/v1/flightobject
     *
     * @param string $classId The unique identifier for a class
     * @param string $objectId The unique identifier for an object
     * @return FlightObject $payload object representing FlightObject resource
     */
    public static function makeFlightObjectResource($classId, $objectId)
    {
        // Define the resource representation of the Object
        // values should be from your DB/services; here we hardcode information
        // below defines an flight object. For more properties, check:
        //// https://developers.google.com/pay/passes/reference/v1/flightobject/insert
        //// https://developers.google.com/pay/passes/guides/pass-verticals/boarding-passes/design

        // There is a client lib to help make the data structure. Newest client is on devsite:
        //// https://developers.google.com/pay/passes/support/libraries#libraries
        // Define Barcodes
        $barcode = new Barcode();
        $barcode->setType("qrCode");
        $barcode->setValue("1234abc");
        $barcode->setAlternateText("optional alternate text");

        $reservationInfo = new ReservationInfo();
        $reservationInfo->setConfirmationCode("42aQw");

        $boardingAndSeatingInfo = new BoardingAndSeatingInfo();
        $boardingAndSeatingInfo->setSeatNumber("42");
        $boardingAndSeatingInfo->setBoardingGroup("B");

        // Define flight object
        $payload = new FlightObject();
        // required properties
        $payload->setClassId($classId);
        $payload->setId($objectId);
        $payload->setState("active");
        $payload->setPassengerName("Sir Bacon the IV");
        $payload->setReservationInfo($reservationInfo);
        // optional.  Check design and reference api to decide what's desirable
        $payload->setBarcode($barcode);
        $payload->setBoardingAndSeatingInfo($boardingAndSeatingInfo);
        return $payload;
    }

    /** Define an GiftCard Class
     *
     * See https://developers.google.com/pay/passes/reference/v1/giftcardclass
     *
     * @param string $classId The unique identifier for a class
     * @return GiftCardClass $payload object representing GiftCardClass resource
     */
    public static function makeGiftCardClass($classId)
    {
        // Define the resource representation of the Class
        // values should be from your DB/services; here we hardcode information
        // below defines an giftcard class. For more properties, check:
        //// https://developers.google.com/pay/passes/reference/v1/giftcardclass/insert
        //// https://developers.google.com/pay/passes/guides/pass-verticals/gift-cards/design

        // There is a client lib to help make the data structure. Newest client is on devsite:
        //// https://developers.google.com/pay/passes/support/libraries#libraries


        $logoUri = new ImageUri();
        $logoUri->setUri("http://farm8.staticflickr.com/7340/11177041185_a61a7f2139_o.jpg");
        $logoImage = new Image();
        $logoImage->setSourceUri($logoUri);

        $textModulesData = new TextModuleData();
        $textModulesData->setBody("All US gift cards are redeemable in any US and Puerto Rico" .
            " Baconrista retail locations, or online at Baconrista.com where" .
            " available, for merchandise or services.");
        $textModulesData->setHeader("Where to Redeem");
        $textModulesDatas = array($textModulesData);


        $locationUri = new Uri();
        $locationUri->setUri("http://maps.google.com/");
        $locationUri->setDescription("Nearby Locations");
        $telephoneUri = new Uri();
        $telephoneUri->setUri("tel:6505555555");
        $telephoneUri->setDescription("Call Customer Service");
        $linksModuleData = new LinksModuleData();
        $linksModuleData->setUris(array($locationUri, $telephoneUri));

        $location = new LatLongPoint();
        $location->setLatitude(37.424015499999996);
        $location->setLongitude(-122.09259560000001);
        $locations = array($location);

        $payload = new GiftCardClass();
        //required properties
        $payload->setId($classId);
        $payload->setReviewStatus("underReview");
        $payload->setIssuerName("Baconrista Gift Cards");
        // optional.  Check design and reference api to decide what's desirable
        $payload->setMerchantName("Baconrista");
        $payload->setProgramLogo($logoImage);
        $payload->setTextModulesData($textModulesDatas);
        $payload->setLinksModuleData($linksModuleData);
        $payload->setLocations($locations);
        $payload->setAllowMultipleUsersPerObject(true);

        return $payload;
    }

    /** Define an GiftCard Object
     *
     * See https://developers.google.com/pay/passes/reference/v1/giftcardobject
     *
     * @param string $classId The unique identifier for a class
     * @param string $objectId The unique identifier for an object
     * @return GiftCardObject $payload object representing GiftCardObject resource
     */
    public static function makeGiftCardObjectResource($classId, $objectId)
    {
        // Define the resource representation of the Object
        // values should be from your DB/services; here we hardcode information
        // below defines an giftcard object. For more properties, check:
        //// https://developers.google.com/pay/passes/reference/v1/giftcardobject/insert
        //// https://developers.google.com/pay/passes/guides/pass-verticals/gift-cards/design

        // There is a client lib to help make the data structure. Newest client is on devsite:
        //// https://developers.google.com/pay/passes/support/libraries#libraries
        // Define Barcodes
        $barcode = new Barcode();
        $barcode->setType("qrCode");
        $barcode->setValue("1234abc");
        $barcode->setAlternateText("optional alternate text");

        $balance = new Money();
        $balance->setMicros(20000000);
        $balance->setCurrencyCode("USD");

        $balanceUpdateTime = new DateTime();
        $balanceUpdateTime->setDate("2023-04-12T11:20:50.52Z");

        $textModulesData = new TextModuleData();
        $textModulesData->setBody("Jane, don\"t forget to use your Baconrista Rewards when  " .
            "paying with this gift card to earn additional points. ");
        $textModulesData->setHeader("Earn double points");
        $textModulesDatas = array($textModulesData);

        // Define giftcard object
        $payload = new GiftCardObject();
        // required properties
        $payload->setClassId($classId);
        $payload->setId($objectId);
        $payload->setState("active");
        $payload->setCardNumber("123jkl4889");
        // optional.  Check design and reference api to decide what's desirable
        $payload->setBarcode($barcode);
        $payload->setPin("1111");
        $payload->setBalance($balance);
        $payload->setBalanceUpdateTime($balanceUpdateTime);
        $payload->setTextModulesData($textModulesDatas);

        return $payload;
    }

    /** Define an Loyalty Class
     *
     * See https://developers.google.com/pay/passes/reference/v1/loyaltyclass
     *
     * @param string $classId The unique identifier for a class
     * @return LoyaltyClass $payload object representing LoyaltyClass resource
     */
    public static function makeLoyaltyClass($classId)
    {
        // Define the resource representation of the Class
        // values should be from your DB/services; here we hardcode information
        // below defines an loyalty class. For more properties, check:
        //// https://developers.google.com/pay/passes/reference/v1/loyaltyclass/insert
        //// https://developers.google.com/pay/passes/guides/pass-verticals/loyalty/design

        // There is a client lib to help make the data structure. Newest client is on devsite:
        //// https://developers.google.com/pay/passes/support/libraries#libraries

        $logoUri = new ImageUri();
        $logoUri->setUri("http://farm8.staticflickr.com/7340/11177041185_a61a7f2139_o.jpg");
        $logoImage = new Image();
        $logoImage->setSourceUri($logoUri);

        $textModulesData = new TextModuleData();
        $textModulesData->setBody("Welcome to Baconrista rewards.  Enjoy your rewards for being a loyal customer. " .
            "10 points for ever dollar spent.  Redeem your points for free coffee, bacon and more! ");
        $textModulesData->setHeader("Rewards details");
        $textModulesDatas = array($textModulesData);

        $locationUri = new Uri();
        $locationUri->setUri("http://maps.google.com/");
        $locationUri->setDescription("Nearby Locations");
        $telephoneUri = new Uri();
        $telephoneUri->setUri("tel:6505555555");
        $telephoneUri->setDescription("Call Customer Service");
        $linksModuleData = new LinksModuleData();
        $linksModuleData->setUris(array($locationUri, $telephoneUri));

        $imageUri = new ImageUri();
        $imageUri->setUri("http://farm4.staticflickr.com/3738/12440799783_3dc3c20606_b.jpg");
        $imageUri->setDescription("Baconrista Loyalty Image");
        $image = new Image();
        $image->setSourceUri($imageUri);
        $imageModulesData = new ImageModuleData();
        $imageModulesData->setMainImage($image);

        $location = new LatLongPoint();
        $location->setLatitude(37.424015499999996);
        $location->setLongitude(-122.09259560000001);
        $locations = array($location);

        $messageOne = new Message();
        $messageOne->setBody("Featuring our new bacon donuts.");
        $messageOne->setHeader("Welcome to Banconrista Rewards!");
        $messages = array($messageOne);



        $payload = new LoyaltyClass();
        //required properties
        $payload->setId($classId);
        $payload->setIssuerName("Baconrista Coffee");
        $payload->setProgramName("Baconrista Rewards");
        $payload->setProgramLogo($logoImage);
        $payload->setReviewStatus("underReview");
        // optional.  Check design and reference api to decide what's desirable
        $payload->setTextModulesData($textModulesDatas);
        $payload->setLinksModuleData($linksModuleData);
        $payload->setImageModulesData($imageModulesData);
        $payload->setRewardsTier("Gold");
        $payload->setRewardsTierLabel("Tier");
        $payload->setLocations($locations);
        $payload->setMessages($messages);

        return $payload;
    }

    /** Define an Loyalty Object
     *
     * See https://developers.google.com/pay/passes/reference/v1/loyaltyobject
     *
     * @param string $classId The unique identifier for a class
     * @param string $objectId The unique identifier for an object
     * @return LoyaltyObject $payload object representing LoyaltyObject resource
     */
    public static function makeLoyaltyObjectResource($classId, $objectId)
    {
        // Define the resource representation of the Object
        // values should be from your DB/services; here we hardcode information
        // below defines an loyalty object. For more properties, check:
        //// https://developers.google.com/pay/passes/reference/v1/loyaltyobject/insert
        //// https://developers.google.com/pay/passes/guides/pass-verticals/loyalty/design

        // There is a client lib to help make the data structure. Newest client is on devsite:
        //// https://developers.google.com/pay/passes/support/libraries#libraries
        // Define Barcodes
        $barcode = new Barcode();
        $barcode->setType("qrCode");
        $barcode->setValue("1234abc");
        $barcode->setAlternateText("optional alternate text");

        $textModulesData = new TextModuleData();
        $textModulesData->setBody("Save more at your local Mountain View store Jane. " .
            " You get 1 bacon fat latte for every 5 coffees purchased.  " .
            "Also just for you, 10% off all pastries in the Mountain View store.");
        $textModulesData->setHeader("Jane\"s Baconrista Rewards");
        $textModulesDatas = array($textModulesData);

        $accountUri = new Uri();
        $accountUri->setUri("http://wwww.google.com/");
        $accountUri->setDescription("My Baconrista Account");
        $linksModuleData = new LinksModuleData();
        $linksModuleData->setUris(array($accountUri));

        $location = new LatLongPoint();
        $location->setLatitude(37.424015499999996);
        $location->setLongitude(-122.09259560000001);
        $locations = array($location);

        $messageOne = new Message();
        $messageOne->setBody("Featuring our new bacon donuts.");
        $messageOne->setHeader("Thanks for joining our program. Show this message to " .
            "our barista for your first free coffee on us!");
        $messages = array($messageOne);

        $balance = new LoyaltyPointsBalance();
        $balance->setString("800");
        $loyaltyPoints = new LoyaltyPoints();
        $loyaltyPoints->setBalance($balance);
        $loyaltyPoints->setLabel("Points");

        $columnOne = new LabelValue();
        $columnOne->setLabel("Next Reward in");
        $columnOne->setValue("2 coffees");
        $columnTwo = new LabelValue();
        $columnTwo->setLabel("Member Since");
        $columnTwo->setValue("01/15/2013");
        $rowOne = new LabelValueRow();
        $rowOne->setColumns(array($columnOne, $columnTwo));
        $columnOneTwo = new LabelValue();
        $columnOneTwo->setLabel("Local Store");
        $columnOneTwo->setValue("Mountain");
        $rowTwo = new LabelValueRow();
        $rowTwo->setColumns(array($columnOneTwo));
        $infoModuleData = new InfoModuleData();
        $infoModuleData->setLabelValueRows(array($rowOne, $rowTwo));


        $rowOne = new LabelValueRow();

        // Define loyalty object
        $payload = new LoyaltyObject();
        // required properties
        $payload->setClassId($classId);
        $payload->setId($objectId);
        $payload->setState("active");
        // optional.  Check design and reference api to decide what's desirable
        $payload->setBarcode($barcode);
        $payload->setAccountId("1234567890");
        $payload->setAccountName("Jane Doe");
        $payload->setTextModulesData($textModulesDatas);
        $payload->setLinksModuleData($linksModuleData);
        $payload->setLocations($locations);
        $payload->setMessages($messages);
        $payload->setLoyaltyPoints($loyaltyPoints);
        $payload->setInfoModuleData($infoModuleData);

        return $payload;
    }

    /** Define an Transit Class
     *
     * See https://developers.google.com/pay/passes/reference/v1/transitclass
     *
     * @param string $classId The unique identifier for a class
     * @return TransitClass $payload object representing TransitClass resource
     */
    public static function makeTransitClass($classId)
    {
        // Define the resource representation of the Class
        // values should be from your DB/services; here we hardcode information
        // below defines an transit class. For more properties, check:
        //// https://developers.google.com/pay/passes/reference/v1/transitclass/insert
        //// https://developers.google.com/pay/passes/guides/pass-verticals/transit-passes/design

        // There is a client lib to help make the data structure. Newest client is on devsite:
        //// https://developers.google.com/pay/passes/support/libraries#libraries
        $titleImageUri = new ImageUri();
        $titleImageUri->setUri("https://live.staticflickr.com/65535/48690277162_cd05f03f4d_o.png");
        $titleImage = new Image();
        $titleImage->setSourceUri($titleImageUri);

        $payload = new TransitClass();
        //required properties
        $payload->setId($classId);
        $payload->setIssuerName("Baconrista Bus");
        $payload->setReviewStatus("underReview");
        $payload->setTransitType("bus");
        $payload->setLogo($titleImage);
        return $payload;
    }

    /** Define an Transit Object
     *
     * See https://developers.google.com/pay/passes/reference/v1/transitobject
     *
     * @param string $classId The unique identifier for a class
     * @param string $objectId The unique identifier for an object
     * @return TransitObject $payload object representing TransitObject resource
     */
    public static function makeTransitObjectResource($classId, $objectId)
    {
        // Define the resource representation of the Object
        // values should be from your DB/services; here we hardcode information
        // below defines an transit object. For more properties, check:
        //// https://developers.google.com/pay/passes/reference/v1/transitobject/insert
        //// https://developers.google.com/pay/passes/guides/pass-verticals/transit-passes/design

        // There is a client lib to help make the data structure. Newest client is on devsite:
        //// https://developers.google.com/pay/passes/support/libraries#libraries
        // Define Barcodes
        $barcode = new Barcode();
        $barcode->setType("qrCode");
        $barcode->setValue("1234abc");
        $barcode->setAlternateText("optional alternate text");

        $localFare = new LocalizedString();
        $localFareTranslated = new TranslatedString();
        $localFareTranslated->setLanguage("en-US");
        $localFareTranslated->setValue("Anytime Single Use");
        $localFare->setDefaultValue($localFareTranslated);
        $localDestinationName = new LocalizedString();
        $localDestinationNameTranslated = new TranslatedString();
        $localDestinationNameTranslated->setLanguage("en-US");
        $localDestinationNameTranslated->setValue("SFO Transit Center");
        $localDestinationName->setDefaultValue($localDestinationNameTranslated);
        $localOriginName = new LocalizedString();
        $localOriginNameTranslated = new TranslatedString();
        $localOriginNameTranslated->setLanguage("en-US");
        $localOriginNameTranslated->setValue("SFO Transit Center");
        $localOriginName->setDefaultValue($localOriginNameTranslated);
        $ticketleg = new TicketLeg();
        $ticketleg->setArrivalDateTime("2020-04-12T20:20:50.52Z");
        $ticketleg->setDepartureDateTime("2020-04-12T16:20:50.52Z");
        $ticketleg->setOriginStationCode("LA");
        $ticketleg->setDestinationStationCode("SFO");
        $ticketleg->setDestinationName($localDestinationName);
        $ticketleg->setOriginName($localOriginName);
        $ticketleg->setFareName($localFare);


        // Define transit object
        $payload = new TransitObject();
        // required properties
        $payload->setClassId($classId);
        $payload->setId($objectId);
        $payload->setState("active");
        $payload->setTripType("oneWay");
        // optional.  Check design and reference api to decide what's desirable
        $payload->setBarcode($barcode);
        $payload->setPassengerNames("Sir Bacon the IV");
        $payload->setPassengerType("singlePassenger");
        $payload->setTicketLegs(array($ticketleg));


        return $payload;
    }
}
