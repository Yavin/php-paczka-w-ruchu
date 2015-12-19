<?php

namespace Yavin\PaczkaWRuchu\DataTransformer;

use Symfony\Component\PropertyAccess\PropertyAccessor;
use Yavin\PaczkaWRuchu\DataTransformerInterface;
use Yavin\PaczkaWRuchu\Model\Location;

class LocationTransformer implements DataTransformerInterface
{
    /**
     * @var PropertyAccessor
     */
    private $propertyAccessor;

    public function __construct()
    {
        $this->propertyAccessor = new PropertyAccessor();
    }

    public function transformToModel(array $parameters)
    {
        $location = new Location();
        $location->setDestinationCode($parameters['DestinationCode']);
        $location->setStreetName($parameters['StreetName']);
        $location->setCity($parameters['City']);
        $location->setDistrict($parameters['District']);
        $location->setLongitude($parameters['Longitude']);
        $location->setLatitude($parameters['Latitude']);
        $location->setProvince($parameters['Province']);
        $location->setCashOnDelivery($parameters['CashOnDelivery']);
        $location->setOpeningHours($parameters['OpeningHours']);
        $location->setLocation($parameters['Location']);
        $location->setPsd($parameters['PSD']);
        $location->setAvailable($parameters['Available']);
        $location->setPointType($parameters['PointType']);

        return $location;
    }

    public function transformToParameters($model)
    {

    }
}
