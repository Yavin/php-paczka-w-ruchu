<?php

namespace Yavin\PaczkaWRuchu;

class PWRSoapClient extends \SoapClient
{
    const WSDL = 'https://api.paczkawruchu.pl/WebServicePwRProd/WebServicePwR.asmx?wsdl';
    const WSDL_TEST = 'https://api-test.paczkawruchu.pl/WebServicePwR/WebServicePwRTest.asmx?wsdl';

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'GiveMeAllRUCHLocation' => 'Yavin\\PaczkaWRuchu\\Soap\\GiveMeAllRUCHLocation',
        'GiveMeAllRUCHLocationResponse' => 'Yavin\\PaczkaWRuchu\\Soap\\GiveMeAllRUCHLocationResponse',
        'GiveMeAllRUCHLocationResult' => 'Yavin\\PaczkaWRuchu\\Soap\\GiveMeAllRUCHLocationResult',
        'GiveMePSDProvince' => 'Yavin\\PaczkaWRuchu\\Soap\\GiveMePSDProvince',
        'GiveMePSDProvinceResponse' => 'Yavin\\PaczkaWRuchu\\Soap\\GiveMePSDProvinceResponse',
        'GiveMePSDProvinceResult' => 'Yavin\\PaczkaWRuchu\\Soap\\GiveMePSDProvinceResult',
        'GiveMeAllPSDLocation' => 'Yavin\\PaczkaWRuchu\\Soap\\GiveMeAllPSDLocation',
        'GiveMeAllPSDLocationResponse' => 'Yavin\\PaczkaWRuchu\\Soap\\GiveMeAllPSDLocationResponse',
        'GiveMeAllPSDLocationResult' => 'Yavin\\PaczkaWRuchu\\Soap\\GiveMeAllPSDLocationResult',
        'GiveMePSDZipcode' => 'Yavin\\PaczkaWRuchu\\Soap\\GiveMePSDZipcode',
        'GiveMePSDZipcodeResponse' => 'Yavin\\PaczkaWRuchu\\Soap\\GiveMePSDZipcodeResponse',
        'GiveMePSDZipcodeResult' => 'Yavin\\PaczkaWRuchu\\Soap\\GiveMePSDZipcodeResult',
        'GiveMeCityPSDLocation' => 'Yavin\\PaczkaWRuchu\\Soap\\GiveMeCityPSDLocation',
        'GiveMeCityPSDLocationResponse' => 'Yavin\\PaczkaWRuchu\\Soap\\GiveMeCityPSDLocationResponse',
        'GiveMeCityPSDLocationResult' => 'Yavin\\PaczkaWRuchu\\Soap\\GiveMeCityPSDLocationResult',
        'GiveMePackStatus' => 'Yavin\\PaczkaWRuchu\\Soap\\GiveMePackStatus',
        'GiveMePackStatusResponse' => 'Yavin\\PaczkaWRuchu\\Soap\\GiveMePackStatusResponse',
        'GiveMePackStatusResult' => 'Yavin\\PaczkaWRuchu\\Soap\\GiveMePackStatusResult',
        'GenerateBusinessPack' => 'Yavin\\PaczkaWRuchu\\Soap\\GenerateBusinessPack',
        'GenerateBusinessPackResponse' => 'Yavin\\PaczkaWRuchu\\Soap\\GenerateBusinessPackResponse',
        'GenerateBusinessPackResult' => 'Yavin\\PaczkaWRuchu\\Soap\\GenerateBusinessPackResult',
        'PutCustomerPackCanceled' => 'Yavin\\PaczkaWRuchu\\Soap\\PutCustomerPackCanceled',
        'PutCustomerPackCanceledResponse' => 'Yavin\\PaczkaWRuchu\\Soap\\PutCustomerPackCanceledResponse',
        'PutCustomerPackCanceledResult' => 'Yavin\\PaczkaWRuchu\\Soap\\PutCustomerPackCanceledResult',
        'PutCustomerPack' => 'Yavin\\PaczkaWRuchu\\Soap\\PutCustomerPack',
        'PutCustomerPackResponse' => 'Yavin\\PaczkaWRuchu\\Soap\\PutCustomerPackResponse',
        'PutCustomerPackResult' => 'Yavin\\PaczkaWRuchu\\Soap\\PutCustomerPackResult',
        'GenerateNumberWaybills' => 'Yavin\\PaczkaWRuchu\\Soap\\GenerateNumberWaybills',
        'GenerateNumberWaybillsResponse' => 'Yavin\\PaczkaWRuchu\\Soap\\GenerateNumberWaybillsResponse',
        'GenerateNumberWaybillsResult' => 'Yavin\\PaczkaWRuchu\\Soap\\GenerateNumberWaybillsResult',
        'CreateCustomer' => 'Yavin\\PaczkaWRuchu\\Soap\\CreateCustomer',
        'CreateCustomerResponse' => 'Yavin\\PaczkaWRuchu\\Soap\\CreateCustomerResponse',
        'CreateCustomerResult' => 'Yavin\\PaczkaWRuchu\\Soap\\CreateCustomerResult',
        'GivePaymentType' => 'Yavin\\PaczkaWRuchu\\Soap\\GivePaymentType',
        'GivePaymentTypeResponse' => 'Yavin\\PaczkaWRuchu\\Soap\\GivePaymentTypeResponse',
        'GivePaymentTypeResult' => 'Yavin\\PaczkaWRuchu\\Soap\\GivePaymentTypeResult',
        'GivePartnerStatus' => 'Yavin\\PaczkaWRuchu\\Soap\\GivePartnerStatus',
        'GivePartnerStatusResponse' => 'Yavin\\PaczkaWRuchu\\Soap\\GivePartnerStatusResponse',
        'GivePartnerStatusResult' => 'Yavin\\PaczkaWRuchu\\Soap\\GivePartnerStatusResult',
        'GenerateLabelBusinessPackList' => 'Yavin\\PaczkaWRuchu\\Soap\\GenerateLabelBusinessPackList',
        'ArrayOfBusinessPack' => 'Yavin\\PaczkaWRuchu\\Soap\\ArrayOfBusinessPack',
        'BusinessPack' => 'Yavin\\PaczkaWRuchu\\Soap\\BusinessPack',
        'GenerateLabelBusinessPackListResponse' => 'Yavin\\PaczkaWRuchu\\Soap\\GenerateLabelBusinessPackListResponse',
        'GenerateLabelBusinessPackListResult' => 'Yavin\\PaczkaWRuchu\\Soap\\GenerateLabelBusinessPackListResult',
        'GenerateLabelBusinessPack' => 'Yavin\\PaczkaWRuchu\\Soap\\GenerateLabelBusinessPack',
        'GenerateLabelBusinessPackResponse' => 'Yavin\\PaczkaWRuchu\\Soap\\GenerateLabelBusinessPackResponse',
        'GenerateLabelBusinessPackResult' => 'Yavin\\PaczkaWRuchu\\Soap\\GenerateLabelBusinessPackResult',
        'GetGeneratedParcels' => 'Yavin\\PaczkaWRuchu\\Soap\\GetGeneratedParcels',
        'GetGeneratedParcelsResponse' => 'Yavin\\PaczkaWRuchu\\Soap\\GetGeneratedParcelsResponse',
        'GetGeneratedParcelsResult' => 'Yavin\\PaczkaWRuchu\\Soap\\GetGeneratedParcelsResult',
        'GenerateProtocol' => 'Yavin\\PaczkaWRuchu\\Soap\\GenerateProtocol',
        'ArrayOfUnsignedLong' => 'Yavin\\PaczkaWRuchu\\Soap\\ArrayOfUnsignedLong',
        'GenerateProtocolResponse' => 'Yavin\\PaczkaWRuchu\\Soap\\GenerateProtocolResponse',
        'GenerateProtocolResult' => 'Yavin\\PaczkaWRuchu\\Soap\\GenerateProtocolResult',
        'LabelPrintDuplicate' => 'Yavin\\PaczkaWRuchu\\Soap\\LabelPrintDuplicate',
        'LabelPrintDuplicateResponse' => 'Yavin\\PaczkaWRuchu\\Soap\\LabelPrintDuplicateResponse',
        'LabelBundle' => 'Yavin\\PaczkaWRuchu\\Soap\\LabelBundle',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = self::WSDL)
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }

        $options = array_merge(array(
            'features' => 1,
        ), $options);

        parent::__construct($wsdl, $options);
    }

    /**
     * @param Soap\GiveMeAllRUCHLocation $parameters
     * @return Soap\GiveMeAllRUCHLocationResponse
     */
    public function GiveMeAllRUCHLocation(Soap\GiveMeAllRUCHLocation $parameters)
    {
        return $this->__soapCall('GiveMeAllRUCHLocation', array($parameters));
    }

    /**
     * @param Soap\GiveMePSDProvince $parameters
     * @return Soap\GiveMePSDProvinceResponse
     */
    public function GiveMePSDProvince(Soap\GiveMePSDProvince $parameters)
    {
        return $this->__soapCall('GiveMePSDProvince', array($parameters));
    }

    /**
     * @param Soap\GiveMeAllPSDLocation $parameters
     * @return Soap\GiveMeAllPSDLocationResponse
     */
    public function GiveMeAllPSDLocation(Soap\GiveMeAllPSDLocation $parameters)
    {
        return $this->__soapCall('GiveMeAllPSDLocation', array($parameters));
    }

    /**
     * @param Soap\GiveMePSDZipcode $parameters
     * @return Soap\GiveMePSDZipcodeResponse
     */
    public function GiveMePSDZipcode(Soap\GiveMePSDZipcode $parameters)
    {
        return $this->__soapCall('GiveMePSDZipcode', array($parameters));
    }

    /**
     * @param Soap\GiveMeCityPSDLocation $parameters
     * @return Soap\GiveMeCityPSDLocationResponse
     */
    public function GiveMeCityPSDLocation(Soap\GiveMeCityPSDLocation $parameters)
    {
        return $this->__soapCall('GiveMeCityPSDLocation', array($parameters));
    }

    /**
     * @param Soap\GiveMePackStatus $parameters
     * @return Soap\GiveMePackStatusResponse
     */
    public function GiveMePackStatus(Soap\GiveMePackStatus $parameters)
    {
        return $this->__soapCall('GiveMePackStatus', array($parameters));
    }

    /**
     * @param Soap\GenerateBusinessPack $parameters
     * @return Soap\GenerateBusinessPackResponse
     */
    public function GenerateBusinessPack(Soap\GenerateBusinessPack $parameters)
    {
        return $this->__soapCall('GenerateBusinessPack', array($parameters));
    }

    /**
     * @param Soap\PutCustomerPackCanceled $parameters
     * @return Soap\PutCustomerPackCanceledResponse
     */
    public function PutCustomerPackCanceled(Soap\PutCustomerPackCanceled $parameters)
    {
        return $this->__soapCall('PutCustomerPackCanceled', array($parameters));
    }

    /**
     * @param Soap\PutCustomerPack $parameters
     * @return Soap\PutCustomerPackResponse
     */
    public function PutCustomerPack(Soap\PutCustomerPack $parameters)
    {
        return $this->__soapCall('PutCustomerPack', array($parameters));
    }

    /**
     * @param Soap\GenerateNumberWaybills $parameters
     * @return Soap\GenerateNumberWaybillsResponse
     */
    public function GenerateNumberWaybills(Soap\GenerateNumberWaybills $parameters)
    {
        return $this->__soapCall('GenerateNumberWaybills', array($parameters));
    }

    /**
     * @param Soap\CreateCustomer $parameters
     * @return Soap\CreateCustomerResponse
     */
    public function CreateCustomer(Soap\CreateCustomer $parameters)
    {
        return $this->__soapCall('CreateCustomer', array($parameters));
    }

    /**
     * @param Soap\GivePaymentType $parameters
     * @return Soap\GivePaymentTypeResponse
     */
    public function GivePaymentType(Soap\GivePaymentType $parameters)
    {
        return $this->__soapCall('GivePaymentType', array($parameters));
    }

    /**
     * @param Soap\GivePartnerStatus $parameters
     * @return Soap\GivePartnerStatusResponse
     */
    public function GivePartnerStatus(Soap\GivePartnerStatus $parameters)
    {
        return $this->__soapCall('GivePartnerStatus', array($parameters));
    }

    /**
     * @param Soap\GenerateLabelBusinessPackList $parameters
     * @return Soap\GenerateLabelBusinessPackListResponse
     */
    public function GenerateLabelBusinessPackList(Soap\GenerateLabelBusinessPackList $parameters)
    {
        return $this->__soapCall('GenerateLabelBusinessPackList', array($parameters));
    }

    /**
     * @param Soap\GenerateLabelBusinessPack $parameters
     * @return Soap\GenerateLabelBusinessPackResponse
     */
    public function GenerateLabelBusinessPack(Soap\GenerateLabelBusinessPack $parameters)
    {
        return $this->__soapCall('GenerateLabelBusinessPack', array($parameters));
    }

    /**
     * @param Soap\GetGeneratedParcels $parameters
     * @return Soap\GetGeneratedParcelsResponse
     */
    public function GetGeneratedParcels(Soap\GetGeneratedParcels $parameters)
    {
        return $this->__soapCall('GetGeneratedParcels', array($parameters));
    }

    /**
     * @param Soap\GenerateProtocol $parameters
     * @return Soap\GenerateProtocolResponse
     */
    public function GenerateProtocol(Soap\GenerateProtocol $parameters)
    {
        return $this->__soapCall('GenerateProtocol', array($parameters));
    }

    /**
     * @param Soap\LabelPrintDuplicate $parameters
     * @return Soap\LabelPrintDuplicateResponse
     */
    public function LabelPrintDuplicate(Soap\LabelPrintDuplicate $parameters)
    {
        return $this->__soapCall('LabelPrintDuplicate', array($parameters));
    }

}
