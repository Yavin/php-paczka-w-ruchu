<?php

namespace Yavin\PaczkaWRuchu;

use Psr\Log\NullLogger;
use Yavin\PaczkaWRuchu\Soap\GiveMeAllRUCHLocationResponse;
use Yavin\PaczkaWRuchu\Soap\GiveMeAllRUCHLocationResult;

class LocationTest extends \PHPUnit_Framework_TestCase
{
    const XML_VALID = '
        <whatever>
            <NewDataSet>
                <AllRUCHLocation>
                    <Err>000</Err>
                    <ErrDes>saved</ErrDes>
                    <DestinationCode>AB-123456-78-90</DestinationCode>
                    <StreetName>Przykladowa 5</StreetName>
                    <City>Krakow</City>
                    <District>Krakow district</District>
                    <Longitude>20</Longitude>
                    <Latitude>50</Latitude>
                    <Province>Malopolskie</Province>
                    <CashOnDelivery>true</CashOnDelivery>
                    <OpeningHours>Pn-Pt:02:00-5:00, So:07:00-7:15, Nd:nieczynne</OpeningHours>
                    <Location>Obok kebabu</Location>
                    <PSD>123456</PSD>
                    <Available>T</Available>
                    <PointType>PSD</PointType>
                </AllRUCHLocation>
            </NewDataSet>
        </whatever>
    ';

    const XML_INVALID = '
        <whatever>
            <NewDataSet>
                <AllRUCHLocation>
                    <Err>200</Err>
                    <ErrDes>Some error desc</ErrDes>
                </AllRUCHLocation>
            </NewDataSet>
        </whatever>
    ';

    public function testReturnsLocations()
    {
        $locations = $this->getApi()->getLocations();

        $this->assertCount(1, $locations);

        $location = $locations[0];
        $this->assertInstanceOf('Yavin\PaczkaWRuchu\Model\Location', $location);

        $this->assertEquals('AB-123456-78-90', $location->getDestinationCode());
        $this->assertEquals('Przykladowa 5', $location->getStreetName());
        $this->assertEquals('Krakow', $location->getCity());
        $this->assertEquals('Krakow district', $location->getDistrict());
        $this->assertEquals('20', $location->getLongitude());
        $this->assertEquals('50', $location->getLatitude());
        $this->assertEquals('Malopolskie', $location->getProvince());
        $this->assertEquals('true', $location->getCashOnDelivery());
        $this->assertEquals('Pn-Pt:02:00-5:00, So:07:00-7:15, Nd:nieczynne', $location->getOpeningHours());
        $this->assertEquals('Obok kebabu', $location->getLocation());
        $this->assertEquals('123456', $location->getPsd());
        $this->assertEquals('T', $location->getAvailable());
        $this->assertEquals('PSD', $location->getPointType());
    }

    /**
     * @expectedException \Yavin\PaczkaWRuchu\Exception\CredencialsException
     */
    public function testItThrowOnErrorResponseException()
    {
        $this->getApi(false)->getLocations();
    }

    private function getApi($valid = true)
    {
        $logger = new NullLogger();
        $soapClient = $this->getSoapClientMock($valid);
        $exceptionFactory = new ExceptionFactory();

        return new PaczkaWRuchuApi($soapClient, $exceptionFactory, $logger, [
            'partnerId' => 'TEST000001',
            'partnerKey' => '123456789ABCDEF',
            'test' => true,
        ]);
    }

    private function getSoapClientMock($valid = true)
    {
        $soapClient = $this->getMock('Yavin\PaczkaWRuchu\PWRSoapClient');

        $result = new GiveMeAllRUCHLocationResult();
        $result->setAny($valid ? self::XML_VALID : self::XML_INVALID);

        $response = new GiveMeAllRUCHLocationResponse();
        $response->setGiveMeAllRUCHLocationResult($result);

        $soapClient->method('GiveMeAllRUCHLocation')
            ->with($this->isInstanceOf('Yavin\PaczkaWRuchu\Soap\GiveMeAllRUCHLocation'))
            ->willReturn($response);

        return $soapClient;
    }
}
