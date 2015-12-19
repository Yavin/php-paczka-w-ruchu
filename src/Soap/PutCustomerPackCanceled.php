<?php

namespace Yavin\PaczkaWRuchu\Soap;

class PutCustomerPackCanceled
{

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
     * @param string $PackCode
     * @param string $PartnerID
     * @param string $PartnerKey
     */
    public function __construct($PackCode = null, $PartnerID = null, $PartnerKey = null)
    {
      $this->PackCode = $PackCode;
      $this->PartnerID = $PartnerID;
      $this->PartnerKey = $PartnerKey;
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
     * @return \Yavin\PaczkaWRuchu\Soap\PutCustomerPackCanceled
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
     * @return \Yavin\PaczkaWRuchu\Soap\PutCustomerPackCanceled
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
     * @return \Yavin\PaczkaWRuchu\Soap\PutCustomerPackCanceled
     */
    public function setPartnerKey($PartnerKey)
    {
      $this->PartnerKey = $PartnerKey;
      return $this;
    }

}
