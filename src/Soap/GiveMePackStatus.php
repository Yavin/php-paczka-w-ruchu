<?php

namespace Yavin\PaczkaWRuchu\Soap;

class GiveMePackStatus
{

    /**
     * @var string $PhoneNumber
     */
    protected $PhoneNumber = null;

    /**
     * @var string $PackCode
     */
    protected $PackCode = null;

    /**
     * @var string $PartnerID
     */
    protected $PartnerID = null;

    /**
     * @var string $PartnerKey
     */
    protected $PartnerKey = null;

    /**
     * @param string $PhoneNumber
     * @param string $PackCode
     * @param string $PartnerID
     * @param string $PartnerKey
     */
    public function __construct($PhoneNumber = null, $PackCode = null, $PartnerID = null, $PartnerKey = null)
    {
      $this->PhoneNumber = $PhoneNumber;
      $this->PackCode = $PackCode;
      $this->PartnerID = $PartnerID;
      $this->PartnerKey = $PartnerKey;
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
     * @return \Yavin\PaczkaWRuchu\Soap\GiveMePackStatus
     */
    public function setPhoneNumber($PhoneNumber)
    {
      $this->PhoneNumber = $PhoneNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackCode()
    {
      return $this->PackCode;
    }

    /**
     * @param string $PackCode
     * @return \Yavin\PaczkaWRuchu\Soap\GiveMePackStatus
     */
    public function setPackCode($PackCode)
    {
      $this->PackCode = $PackCode;
      return $this;
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
     * @return \Yavin\PaczkaWRuchu\Soap\GiveMePackStatus
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
     * @return \Yavin\PaczkaWRuchu\Soap\GiveMePackStatus
     */
    public function setPartnerKey($PartnerKey)
    {
      $this->PartnerKey = $PartnerKey;
      return $this;
    }

}
