<?php

namespace Yavin\PaczkaWRuchu;

use Psr\Log\NullLogger;
use Yavin\PaczkaWRuchu\Soap\GenerateBusinessPackResponse;
use Yavin\PaczkaWRuchu\Soap\GenerateBusinessPackResult;
use Yavin\PaczkaWRuchu\Soap\GiveMeAllRUCHLocationResponse;
use Yavin\PaczkaWRuchu\Soap\GiveMeAllRUCHLocationResult;

class BusinessPackTest extends \PHPUnit_Framework_TestCase
{
    const XML_VALID = '
        <whatever>
            <NewDataSet>
                <GenerateBusinessPack>
                    <Err>000</Err>
                    <ErrDes>saved</ErrDes>
                    <PackCode_RUCH>1234567890123</PackCode_RUCH>
                    <DestinationCode>AB-123456-78-90</DestinationCode>
                    <DestinationId>123456</DestinationId>
                    <PackPrice>123</PackPrice>
                    <PackPaid>false</PackPaid>
                </GenerateBusinessPack>
            </NewDataSet>
        </whatever>
    ';

    const XML_INVALID = '
        <whatever>
            <NewDataSet>
                <GenerateBusinessPack>
                    <Err>206</Err>
                    <ErrDes>unknown DestinationCode</ErrDes>
                </GenerateBusinessPack>
            </NewDataSet>
        </whatever>
    ';

    public function testSendBusinessPack()
    {
        $recipient = new \Yavin\PaczkaWRuchu\Model\Recipient();
        $recipient->setFirstName('Margaret');
        $recipient->setLastName('Recipient');
        $recipient->setPhoneNumber('123456789');

        $sender = new \Yavin\PaczkaWRuchu\Model\Sender();
        $sender->setEmail('test@example.com');
        $sender->setCompanyName('Foo Bar Enterprice');
        $sender->setStreetName('Eg Street');
        $sender->setBuildingNumber(123);
        $sender->setCity('Utiopia');
        $sender->setPostCode('00-000');
        $sender->setPhoneNumber('123456789');

        $businessPack = new \Yavin\PaczkaWRuchu\Model\BusinessPack();
        $businessPack->setDestinationCode('123');
        $businessPack->setRecipient($recipient);
        $businessPack->setSender($sender);
        $businessPack->setPrintAddress(1);

        $businessPackInfo = $this->getApi()->generateBusinessPack($businessPack);

        $this->assertInstanceOf('Yavin\PaczkaWRuchu\Model\BusinessPackInfo', $businessPackInfo);

        $this->assertEquals('1234567890123', $businessPackInfo->getPackCode());
        $this->assertEquals('AB-123456-78-90', $businessPackInfo->getDestinationCode());
        $this->assertEquals('123456', $businessPackInfo->getDestinationId());
        $this->assertEquals('123', $businessPackInfo->getPackPrice());
        $this->assertEquals('false', $businessPackInfo->getPackPaid());
    }

    /**
     * @expectedException \Yavin\PaczkaWRuchu\Exception\PWRException
     */
    public function testItThrowOnErrorResponseException()
    {
        $recipient = new \Yavin\PaczkaWRuchu\Model\Recipient();
        $sender = new \Yavin\PaczkaWRuchu\Model\Sender();

        $businessPack = new \Yavin\PaczkaWRuchu\Model\BusinessPack();
        $businessPack->setRecipient($recipient);
        $businessPack->setSender($sender);

        $this->getApi(false)->generateBusinessPack($businessPack);
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

        $result = new GenerateBusinessPackResult();
        $result->setAny($valid ? self::XML_VALID : self::XML_INVALID);

        $response = new GenerateBusinessPackResponse();
        $response->setGenerateBusinessPackResult($result);

        $soapClient->method('GenerateBusinessPack')
            ->with($this->isInstanceOf('Yavin\PaczkaWRuchu\Soap\GenerateBusinessPack'))
            ->willReturn($response);

        return $soapClient;
    }
}
