<?php

namespace Yavin\PaczkaWRuchu\Soap;

class WebServicePwR extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
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
    public function __construct(array $options = array(), $wsdl = 'https://api-test.paczkawruchu.pl/WebServicePwRProd/WebServicePwR.asmx?WSDL')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * @param GiveMeAllRUCHLocation $parameters
     * @return GiveMeAllRUCHLocationResponse
     */
    public function GiveMeAllRUCHLocation(GiveMeAllRUCHLocation $parameters)
    {
      return $this->__soapCall('GiveMeAllRUCHLocation', array($parameters));
    }

    /**
     * @param GiveMePSDProvince $parameters
     * @return GiveMePSDProvinceResponse
     */
    public function GiveMePSDProvince(GiveMePSDProvince $parameters)
    {
      return $this->__soapCall('GiveMePSDProvince', array($parameters));
    }

    /**
     * @param GiveMeAllPSDLocation $parameters
     * @return GiveMeAllPSDLocationResponse
     */
    public function GiveMeAllPSDLocation(GiveMeAllPSDLocation $parameters)
    {
      return $this->__soapCall('GiveMeAllPSDLocation', array($parameters));
    }

    /**
     * @param GiveMePSDZipcode $parameters
     * @return GiveMePSDZipcodeResponse
     */
    public function GiveMePSDZipcode(GiveMePSDZipcode $parameters)
    {
      return $this->__soapCall('GiveMePSDZipcode', array($parameters));
    }

    /**
     * @param GiveMeCityPSDLocation $parameters
     * @return GiveMeCityPSDLocationResponse
     */
    public function GiveMeCityPSDLocation(GiveMeCityPSDLocation $parameters)
    {
      return $this->__soapCall('GiveMeCityPSDLocation', array($parameters));
    }

    /**
     * @param GiveMePackStatus $parameters
     * @return GiveMePackStatusResponse
     */
    public function GiveMePackStatus(GiveMePackStatus $parameters)
    {
      return $this->__soapCall('GiveMePackStatus', array($parameters));
    }

    /**
     * @param GenerateBusinessPack $parameters
     * @return GenerateBusinessPackResponse
     */
    public function GenerateBusinessPack(GenerateBusinessPack $parameters)
    {
      return $this->__soapCall('GenerateBusinessPack', array($parameters));
    }

    /**
     * @param PutCustomerPackCanceled $parameters
     * @return PutCustomerPackCanceledResponse
     */
    public function PutCustomerPackCanceled(PutCustomerPackCanceled $parameters)
    {
      return $this->__soapCall('PutCustomerPackCanceled', array($parameters));
    }

    /**
     * @param PutCustomerPack $parameters
     * @return PutCustomerPackResponse
     */
    public function PutCustomerPack(PutCustomerPack $parameters)
    {
      return $this->__soapCall('PutCustomerPack', array($parameters));
    }

    /**
     * @param GenerateNumberWaybills $parameters
     * @return GenerateNumberWaybillsResponse
     */
    public function GenerateNumberWaybills(GenerateNumberWaybills $parameters)
    {
      return $this->__soapCall('GenerateNumberWaybills', array($parameters));
    }

    /**
     * @param CreateCustomer $parameters
     * @return CreateCustomerResponse
     */
    public function CreateCustomer(CreateCustomer $parameters)
    {
      return $this->__soapCall('CreateCustomer', array($parameters));
    }

    /**
     * @param GivePaymentType $parameters
     * @return GivePaymentTypeResponse
     */
    public function GivePaymentType(GivePaymentType $parameters)
    {
      return $this->__soapCall('GivePaymentType', array($parameters));
    }

    /**
     * @param GivePartnerStatus $parameters
     * @return GivePartnerStatusResponse
     */
    public function GivePartnerStatus(GivePartnerStatus $parameters)
    {
      return $this->__soapCall('GivePartnerStatus', array($parameters));
    }

    /**
     * @param GenerateLabelBusinessPackList $parameters
     * @return GenerateLabelBusinessPackListResponse
     */
    public function GenerateLabelBusinessPackList(GenerateLabelBusinessPackList $parameters)
    {
      return $this->__soapCall('GenerateLabelBusinessPackList', array($parameters));
    }

    /**
     * @param GenerateLabelBusinessPack $parameters
     * @return GenerateLabelBusinessPackResponse
     */
    public function GenerateLabelBusinessPack(GenerateLabelBusinessPack $parameters)
    {
      return $this->__soapCall('GenerateLabelBusinessPack', array($parameters));
    }

    /**
     * @param GetGeneratedParcels $parameters
     * @return GetGeneratedParcelsResponse
     */
    public function GetGeneratedParcels(GetGeneratedParcels $parameters)
    {
      return $this->__soapCall('GetGeneratedParcels', array($parameters));
    }

    /**
     * @param GenerateProtocol $parameters
     * @return GenerateProtocolResponse
     */
    public function GenerateProtocol(GenerateProtocol $parameters)
    {
      return $this->__soapCall('GenerateProtocol', array($parameters));
    }

    /**
     * @param LabelPrintDuplicate $parameters
     * @return LabelPrintDuplicateResponse
     */
    public function LabelPrintDuplicate(LabelPrintDuplicate $parameters)
    {
      return $this->__soapCall('LabelPrintDuplicate', array($parameters));
    }

}
