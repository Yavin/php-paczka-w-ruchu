<?php

namespace Yavin\PaczkaWRuchu\Soap;

class BusinessPack
{
    /**
     * @var string $DestinationCode
     */
    protected $DestinationCode = null;

    /**
     * @var string $AlternativeDestinationCode
     */
    protected $AlternativeDestinationCode = null;

    /**
     * @var string $BoxSize
     */
    protected $BoxSize = null;

    /**
     * @var string $PackValue
     */
    protected $PackValue = null;

    /**
     * @var string $CashOnDelivery
     */
    protected $CashOnDelivery = null;

    /**
     * @var string $AmountCashOnDelivery
     */
    protected $AmountCashOnDelivery = null;

    /**
     * @var string $Insurance
     */
    protected $Insurance = null;

    /**
     * @var string $EMail
     */
    protected $EMail = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var string $StreetName
     */
    protected $StreetName = null;

    /**
     * @var string $BuildingNumber
     */
    protected $BuildingNumber = null;

    /**
     * @var string $FlatNumber
     */
    protected $FlatNumber = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $PostCode
     */
    protected $PostCode = null;

    /**
     * @var string $PhoneNumber
     */
    protected $PhoneNumber = null;

    /**
     * @var string $SenderEMail
     */
    protected $SenderEMail = null;

    /**
     * @var string $SenderFirstName
     */
    protected $SenderFirstName = null;

    /**
     * @var string $SenderLastName
     */
    protected $SenderLastName = null;

    /**
     * @var string $SenderCompanyName
     */
    protected $SenderCompanyName = null;

    /**
     * @var string $SenderStreetName
     */
    protected $SenderStreetName = null;

    /**
     * @var string $SenderBuildingNumber
     */
    protected $SenderBuildingNumber = null;

    /**
     * @var string $SenderFlatNumber
     */
    protected $SenderFlatNumber = null;

    /**
     * @var string $SenderCity
     */
    protected $SenderCity = null;

    /**
     * @var string $SenderPostCode
     */
    protected $SenderPostCode = null;

    /**
     * @var string $SenderPhoneNumber
     */
    protected $SenderPhoneNumber = null;

    /**
     * @var string $SenderOrders
     */
    protected $SenderOrders = null;

    /**
     * @var string $ReturnDestinationCode
     */
    protected $ReturnDestinationCode = null;

    /**
     * @var string $ReturnEMail
     */
    protected $ReturnEMail = null;

    /**
     * @var string $ReturnFirstName
     */
    protected $ReturnFirstName = null;

    /**
     * @var string $ReturnLastName
     */
    protected $ReturnLastName = null;

    /**
     * @var string $ReturnCompanyName
     */
    protected $ReturnCompanyName = null;

    /**
     * @var string $ReturnStreetName
     */
    protected $ReturnStreetName = null;

    /**
     * @var string $ReturnBuildingNumber
     */
    protected $ReturnBuildingNumber = null;

    /**
     * @var string $ReturnFlatNumber
     */
    protected $ReturnFlatNumber = null;

    /**
     * @var string $ReturnCity
     */
    protected $ReturnCity = null;

    /**
     * @var string $ReturnPostCode
     */
    protected $ReturnPostCode = null;

    /**
     * @var string $ReturnPhoneNumber
     */
    protected $ReturnPhoneNumber = null;

    /**
     * @var string $ReturnPack
     */
    protected $ReturnPack = null;

    /**
     * @var string $TransferDescription
     */
    protected $TransferDescription = null;

    /**
     * @var string $PrintAdress
     */
    protected $PrintAdress = null;

    /**
     * @var string $ReturnAvailable
     */
    protected $ReturnAvailable = null;

    /**
     * @var string $ReturnQuantity
     */
    protected $ReturnQuantity = null;

    /**
     * @var string $PrintType
     */
    protected $PrintType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDestinationCode()
    {
      return $this->DestinationCode;
    }

    /**
     * @param string $DestinationCode
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setDestinationCode($DestinationCode)
    {
      $this->DestinationCode = $DestinationCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAlternativeDestinationCode()
    {
      return $this->AlternativeDestinationCode;
    }

    /**
     * @param string $AlternativeDestinationCode
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setAlternativeDestinationCode($AlternativeDestinationCode)
    {
      $this->AlternativeDestinationCode = $AlternativeDestinationCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getBoxSize()
    {
      return $this->BoxSize;
    }

    /**
     * @param string $BoxSize
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setBoxSize($BoxSize)
    {
      $this->BoxSize = $BoxSize;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackValue()
    {
      return $this->PackValue;
    }

    /**
     * @param string $PackValue
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setPackValue($PackValue)
    {
      $this->PackValue = $PackValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getCashOnDelivery()
    {
      return $this->CashOnDelivery;
    }

    /**
     * @param string $CashOnDelivery
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setCashOnDelivery($CashOnDelivery)
    {
      $this->CashOnDelivery = $CashOnDelivery;
      return $this;
    }

    /**
     * @return string
     */
    public function getAmountCashOnDelivery()
    {
      return $this->AmountCashOnDelivery;
    }

    /**
     * @param string $AmountCashOnDelivery
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setAmountCashOnDelivery($AmountCashOnDelivery)
    {
      $this->AmountCashOnDelivery = $AmountCashOnDelivery;
      return $this;
    }

    /**
     * @return string
     */
    public function getInsurance()
    {
      return $this->Insurance;
    }

    /**
     * @param string $Insurance
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setInsurance($Insurance)
    {
      $this->Insurance = $Insurance;
      return $this;
    }

    /**
     * @return string
     */
    public function getEMail()
    {
      return $this->EMail;
    }

    /**
     * @param string $EMail
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setEMail($EMail)
    {
      $this->EMail = $EMail;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
      return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setCompanyName($CompanyName)
    {
      $this->CompanyName = $CompanyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreetName()
    {
      return $this->StreetName;
    }

    /**
     * @param string $StreetName
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setStreetName($StreetName)
    {
      $this->StreetName = $StreetName;
      return $this;
    }

    /**
     * @return string
     */
    public function getBuildingNumber()
    {
      return $this->BuildingNumber;
    }

    /**
     * @param string $BuildingNumber
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setBuildingNumber($BuildingNumber)
    {
      $this->BuildingNumber = $BuildingNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getFlatNumber()
    {
      return $this->FlatNumber;
    }

    /**
     * @param string $FlatNumber
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setFlatNumber($FlatNumber)
    {
      $this->FlatNumber = $FlatNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostCode()
    {
      return $this->PostCode;
    }

    /**
     * @param string $PostCode
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setPostCode($PostCode)
    {
      $this->PostCode = $PostCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
      return $this->PhoneNumber;
    }

    /**
     * @param string $PhoneNumber
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setPhoneNumber($PhoneNumber)
    {
      $this->PhoneNumber = $PhoneNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getSenderEMail()
    {
      return $this->SenderEMail;
    }

    /**
     * @param string $SenderEMail
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setSenderEMail($SenderEMail)
    {
      $this->SenderEMail = $SenderEMail;
      return $this;
    }

    /**
     * @return string
     */
    public function getSenderFirstName()
    {
      return $this->SenderFirstName;
    }

    /**
     * @param string $SenderFirstName
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setSenderFirstName($SenderFirstName)
    {
      $this->SenderFirstName = $SenderFirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSenderLastName()
    {
      return $this->SenderLastName;
    }

    /**
     * @param string $SenderLastName
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setSenderLastName($SenderLastName)
    {
      $this->SenderLastName = $SenderLastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSenderCompanyName()
    {
      return $this->SenderCompanyName;
    }

    /**
     * @param string $SenderCompanyName
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setSenderCompanyName($SenderCompanyName)
    {
      $this->SenderCompanyName = $SenderCompanyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSenderStreetName()
    {
      return $this->SenderStreetName;
    }

    /**
     * @param string $SenderStreetName
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setSenderStreetName($SenderStreetName)
    {
      $this->SenderStreetName = $SenderStreetName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSenderBuildingNumber()
    {
      return $this->SenderBuildingNumber;
    }

    /**
     * @param string $SenderBuildingNumber
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setSenderBuildingNumber($SenderBuildingNumber)
    {
      $this->SenderBuildingNumber = $SenderBuildingNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getSenderFlatNumber()
    {
      return $this->SenderFlatNumber;
    }

    /**
     * @param string $SenderFlatNumber
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setSenderFlatNumber($SenderFlatNumber)
    {
      $this->SenderFlatNumber = $SenderFlatNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getSenderCity()
    {
      return $this->SenderCity;
    }

    /**
     * @param string $SenderCity
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setSenderCity($SenderCity)
    {
      $this->SenderCity = $SenderCity;
      return $this;
    }

    /**
     * @return string
     */
    public function getSenderPostCode()
    {
      return $this->SenderPostCode;
    }

    /**
     * @param string $SenderPostCode
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setSenderPostCode($SenderPostCode)
    {
      $this->SenderPostCode = $SenderPostCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSenderPhoneNumber()
    {
      return $this->SenderPhoneNumber;
    }

    /**
     * @param string $SenderPhoneNumber
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setSenderPhoneNumber($SenderPhoneNumber)
    {
      $this->SenderPhoneNumber = $SenderPhoneNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getSenderOrders()
    {
      return $this->SenderOrders;
    }

    /**
     * @param string $SenderOrders
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setSenderOrders($SenderOrders)
    {
      $this->SenderOrders = $SenderOrders;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnDestinationCode()
    {
      return $this->ReturnDestinationCode;
    }

    /**
     * @param string $ReturnDestinationCode
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setReturnDestinationCode($ReturnDestinationCode)
    {
      $this->ReturnDestinationCode = $ReturnDestinationCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnEMail()
    {
      return $this->ReturnEMail;
    }

    /**
     * @param string $ReturnEMail
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setReturnEMail($ReturnEMail)
    {
      $this->ReturnEMail = $ReturnEMail;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnFirstName()
    {
      return $this->ReturnFirstName;
    }

    /**
     * @param string $ReturnFirstName
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setReturnFirstName($ReturnFirstName)
    {
      $this->ReturnFirstName = $ReturnFirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnLastName()
    {
      return $this->ReturnLastName;
    }

    /**
     * @param string $ReturnLastName
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setReturnLastName($ReturnLastName)
    {
      $this->ReturnLastName = $ReturnLastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnCompanyName()
    {
      return $this->ReturnCompanyName;
    }

    /**
     * @param string $ReturnCompanyName
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setReturnCompanyName($ReturnCompanyName)
    {
      $this->ReturnCompanyName = $ReturnCompanyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnStreetName()
    {
      return $this->ReturnStreetName;
    }

    /**
     * @param string $ReturnStreetName
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setReturnStreetName($ReturnStreetName)
    {
      $this->ReturnStreetName = $ReturnStreetName;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnBuildingNumber()
    {
      return $this->ReturnBuildingNumber;
    }

    /**
     * @param string $ReturnBuildingNumber
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setReturnBuildingNumber($ReturnBuildingNumber)
    {
      $this->ReturnBuildingNumber = $ReturnBuildingNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnFlatNumber()
    {
      return $this->ReturnFlatNumber;
    }

    /**
     * @param string $ReturnFlatNumber
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setReturnFlatNumber($ReturnFlatNumber)
    {
      $this->ReturnFlatNumber = $ReturnFlatNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnCity()
    {
      return $this->ReturnCity;
    }

    /**
     * @param string $ReturnCity
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setReturnCity($ReturnCity)
    {
      $this->ReturnCity = $ReturnCity;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnPostCode()
    {
      return $this->ReturnPostCode;
    }

    /**
     * @param string $ReturnPostCode
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setReturnPostCode($ReturnPostCode)
    {
      $this->ReturnPostCode = $ReturnPostCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnPhoneNumber()
    {
      return $this->ReturnPhoneNumber;
    }

    /**
     * @param string $ReturnPhoneNumber
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setReturnPhoneNumber($ReturnPhoneNumber)
    {
      $this->ReturnPhoneNumber = $ReturnPhoneNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnPack()
    {
      return $this->ReturnPack;
    }

    /**
     * @param string $ReturnPack
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setReturnPack($ReturnPack)
    {
      $this->ReturnPack = $ReturnPack;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransferDescription()
    {
      return $this->TransferDescription;
    }

    /**
     * @param string $TransferDescription
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setTransferDescription($TransferDescription)
    {
      $this->TransferDescription = $TransferDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrintAdress()
    {
      return $this->PrintAdress;
    }

    /**
     * @param string $PrintAdress
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setPrintAdress($PrintAdress)
    {
      $this->PrintAdress = $PrintAdress;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnAvailable()
    {
      return $this->ReturnAvailable;
    }

    /**
     * @param string $ReturnAvailable
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setReturnAvailable($ReturnAvailable)
    {
      $this->ReturnAvailable = $ReturnAvailable;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnQuantity()
    {
      return $this->ReturnQuantity;
    }

    /**
     * @param string $ReturnQuantity
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setReturnQuantity($ReturnQuantity)
    {
      $this->ReturnQuantity = $ReturnQuantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrintType()
    {
      return $this->PrintType;
    }

    /**
     * @param string $PrintType
     * @return \Yavin\PaczkaWRuchu\Soap\BusinessPack
     */
    public function setPrintType($PrintType)
    {
      $this->PrintType = $PrintType;
      return $this;
    }

}
