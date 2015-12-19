<?php

namespace Yavin\PaczkaWRuchu;

use Psr\Log\LoggerInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Yavin\PaczkaWRuchu\DataTransformer\LocationTransformer;
use Yavin\PaczkaWRuchu\Exception\PWRException;
use Yavin\PaczkaWRuchu\Model\BusinessPack;
use Yavin\PaczkaWRuchu\Model\BusinessPackInfo;
use Yavin\PaczkaWRuchu\Model\Location;

class PaczkaWRuchuApi
{
    /**
     * @var PWRSoapClient
     */
    private $pwrSoapClient;

    /**
     * @var array
     */
    private $options;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var ExceptionFactory
     */
    private $exceptionFactory;

    public function __construct(
        PWRSoapClient $pwrSoapClient,
        ExceptionFactory $exceptionFactory,
        LoggerInterface $logger,
        array $options
    ) {
        $this->logger = $logger;
        $this->pwrSoapClient = $pwrSoapClient;
        $this->exceptionFactory = $exceptionFactory;

        $optionsResolver = new OptionsResolver();
        $this->configureOptions($optionsResolver);
        $this->options = $optionsResolver->resolve($options);
    }

    private function configureOptions(OptionsResolver $optionsResolver)
    {
        $optionsResolver->setRequired([
            'partnerId',
            'partnerKey',
        ]);

        $optionsResolver->setDefaults([
            'test' => false,
        ]);
    }

    /**
     * @return Location[]
     */
    public function getLocations()
    {
        $parameters = new Soap\GiveMeAllRUCHLocation($this->options['partnerId'], $this->options['partnerKey']);
        $response = $this->pwrSoapClient->GiveMeAllRUCHLocation($parameters);

        $xml = $response->getGiveMeAllRUCHLocationResult()->getAny();
        $xml = new \SimpleXMLElement($xml);
        $this->checkLocationError($xml);

        $locationTransformer = new LocationTransformer();

        $locationsArray = array();
        foreach ($xml->xpath('//NewDataSet/AllRUCHLocation') as $locationData) {
            $locationsArray[] = $locationTransformer->transformToModel((array) $locationData);
        }

        return $locationsArray;
    }

    public function generateBusinessPack(BusinessPack $businessPack)
    {
        $parameters = new Soap\GenerateBusinessPack($this->options['partnerId'], $this->options['partnerKey']);
        $this->fillBusinessPackParameters($parameters,$businessPack);
        $response = $this->pwrSoapClient->GenerateBusinessPack($parameters);

        $xml = $response->getGenerateBusinessPackResult()->getAny();
        $xml = new \SimpleXMLElement($xml);
        $this->checkBusinessPackError($xml);

        $xmlData = $xml->NewDataSet->GenerateBusinessPack;
        $businessPackInfo = new BusinessPackInfo();
        $businessPackInfo->setPackCode((string) $xmlData->PackCode_RUCH);
        $businessPackInfo->setDestinationCode((string) $xmlData->DestinationCode);
        $businessPackInfo->setDestinationId((string) $xmlData->DestinationId);
        $businessPackInfo->setPackPrice((string) $xmlData->PackPrice);
        $businessPackInfo->setPackPaid((string) $xmlData->PackPaid);
        $businessPackInfo->setLabelData((string) $xmlData->LabelData);

        return $businessPackInfo;
    }

    private function checkLocationError(\SimpleXMLElement $xmlData)
    {
        $errorCode = $xmlData->xpath('//NewDataSet/AllRUCHLocation/Err');
        $errorMessage = $xmlData->xpath('//NewDataSet/AllRUCHLocation/ErrDes');

        $errorCode = (string) $errorCode[0];
        $errorMessage = (string) $errorMessage[0];

        if ($errorCode == '000') {
            return;
        }

        throw $this->exceptionFactory->create($errorCode, $errorMessage);
    }

    private function checkBusinessPackError(\SimpleXMLElement $xmlData)
    {
        $errorCode = $xmlData->xpath('//NewDataSet/GenerateBusinessPack/Err');
        $errorMessage = $xmlData->xpath('//NewDataSet/GenerateBusinessPack/ErrDes');

        $errorCode = (string) $errorCode[0];
        $errorMessage = (string) $errorMessage[0];

        if ($errorCode == '000') {
            return;
        }

        throw $this->exceptionFactory->create($errorCode, $errorMessage);
    }

    private function fillBusinessPackParameters(Soap\GenerateBusinessPack $parameters, BusinessPack $businessPack)
    {
        $parameters->setDestinationCode($businessPack->getDestinationCode());
        $parameters->setPrintAdress(1);

        $recipient = $businessPack->getRecipient();
        $parameters->setFirstName($recipient->getFirstName());
        $parameters->setLastName($recipient->getLastName());
        $parameters->setPhoneNumber($recipient->getPhoneNumber());

        $sender = $businessPack->getSender();
        $parameters->setSenderEMail($sender->getEmail());
        $parameters->setSenderCompanyName($sender->getCompanyName());
        $parameters->setSenderStreetName($sender->getStreetName());
        $parameters->setSenderBuildingNumber($sender->getBuildingNumber());
        $parameters->setSenderCity($sender->getCity());
        $parameters->setSenderPostCode($sender->getPostCode());
        $parameters->setSenderPhoneNumber($sender->getPhoneNumber());
    }
}
