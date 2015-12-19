<?php

namespace Yavin\PaczkaWRuchu\Soap;

class CreateCustomer
{

    /**
     * @var string $PartnerID
     */
    protected $PartnerID = null;

    /**
     * @var string $PartnerKey
     */
    protected $PartnerKey = null;

    /**
     * @var string $Nip
     */
    protected $Nip = null;

    /**
     * @var string $City
     */
    protected $City = null;

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
     * @var string $PostCode
     */
    protected $PostCode = null;

    /**
     * @var string $PhoneNumber
     */
    protected $PhoneNumber = null;

    /**
     * @var string $EMail
     */
    protected $EMail = null;

    /**
     * @param string $PartnerID
     * @param string $PartnerKey
     * @param string $Nip
     * @param string $City
     * @param string $FirstName
     * @param string $LastName
     * @param string $CompanyName
     * @param string $StreetName
     * @param string $BuildingNumber
     * @param string $PostCode
     * @param string $PhoneNumber
     * @param string $EMail
     */
    public function __construct($PartnerID = null, $PartnerKey = null, $Nip = null, $City = null, $FirstName = null, $LastName = null, $CompanyName = null, $StreetName = null, $BuildingNumber = null, $PostCode = null, $PhoneNumber = null, $EMail = null)
    {
      $this->PartnerID = $PartnerID;
      $this->PartnerKey = $PartnerKey;
      $this->Nip = $Nip;
      $this->City = $City;
      $this->FirstName = $FirstName;
      $this->LastName = $LastName;
      $this->CompanyName = $CompanyName;
      $this->StreetName = $StreetName;
      $this->BuildingNumber = $BuildingNumber;
      $this->PostCode = $PostCode;
      $this->PhoneNumber = $PhoneNumber;
      $this->EMail = $EMail;
    }

    /**
     * @return string
     */
    public function getPartnerID()
    {
      return $this->PartnerID;
    }

    /**
     * @param string $PartnerID
     * @return \Yavin\PaczkaWRuchu\Soap\CreateCustomer
     */
    public function setPartnerID($PartnerID)
    {
      $this->PartnerID = $PartnerID;
      return $this;
    }

    /**
     * @return string
     */
    public function getPartnerKey()
    {
      return $this->PartnerKey;
    }

    /**
     * @param string $PartnerKey
     * @return \Yavin\PaczkaWRuchu\Soap\CreateCustomer
     */
    public function setPartnerKey($PartnerKey)
    {
      $this->PartnerKey = $PartnerKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getNip()
    {
      return $this->Nip;
    }

    /**
     * @param string $Nip
     * @return \Yavin\PaczkaWRuchu\Soap\CreateCustomer
     */
    public function setNip($Nip)
    {
      $this->Nip = $Nip;
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
     * @return \Yavin\PaczkaWRuchu\Soap\CreateCustomer
     */
    public function setCity($City)
    {
      $this->City = $City;
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
     * @return \Yavin\PaczkaWRuchu\Soap\CreateCustomer
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
     * @return \Yavin\PaczkaWRuchu\Soap\CreateCustomer
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
     * @return \Yavin\PaczkaWRuchu\Soap\CreateCustomer
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
     * @return \Yavin\PaczkaWRuchu\Soap\CreateCustomer
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
     * @return \Yavin\PaczkaWRuchu\Soap\CreateCustomer
     */
    public function setBuildingNumber($BuildingNumber)
    {
      $this->BuildingNumber = $BuildingNumber;
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
     * @return \Yavin\PaczkaWRuchu\Soap\CreateCustomer
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
     * @return \Yavin\PaczkaWRuchu\Soap\CreateCustomer
     */
    public function setPhoneNumber($PhoneNumber)
    {
      $this->PhoneNumber = $PhoneNumber;
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
     * @return \Yavin\PaczkaWRuchu\Soap\CreateCustomer
     */
    public function setEMail($EMail)
    {
      $this->EMail = $EMail;
      return $this;
    }

}
