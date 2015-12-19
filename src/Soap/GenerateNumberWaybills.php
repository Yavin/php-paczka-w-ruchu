<?php

namespace Yavin\PaczkaWRuchu\Soap;

class GenerateNumberWaybills
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
     * @var string $NumberOfWaybills
     */
    protected $NumberOfWaybills = null;

    /**
     * @param string $PartnerID
     * @param string $PartnerKey
     * @param string $NumberOfWaybills
     */
    public function __construct($PartnerID = null, $PartnerKey = null, $NumberOfWaybills = null)
    {
      $this->PartnerID = $PartnerID;
      $this->PartnerKey = $PartnerKey;
      $this->NumberOfWaybills = $NumberOfWaybills;
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
     * @return \Yavin\PaczkaWRuchu\Soap\GenerateNumberWaybills
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
     * @return \Yavin\PaczkaWRuchu\Soap\GenerateNumberWaybills
     */
    public function setPartnerKey($PartnerKey)
    {
      $this->PartnerKey = $PartnerKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumberOfWaybills()
    {
      return $this->NumberOfWaybills;
    }

    /**
     * @param string $NumberOfWaybills
     * @return \Yavin\PaczkaWRuchu\Soap\GenerateNumberWaybills
     */
    public function setNumberOfWaybills($NumberOfWaybills)
    {
      $this->NumberOfWaybills = $NumberOfWaybills;
      return $this;
    }

}
