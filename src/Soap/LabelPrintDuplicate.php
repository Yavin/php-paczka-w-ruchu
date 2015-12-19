<?php

namespace Yavin\PaczkaWRuchu\Soap;

class LabelPrintDuplicate
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
     * @var string $PackCode
     */
    protected $PackCode = null;

    /**
     * @param string $PartnerID
     * @param string $PartnerKey
     * @param string $PackCode
     */
    public function __construct($PartnerID = null, $PartnerKey = null, $PackCode = null)
    {
      $this->PartnerID = $PartnerID;
      $this->PartnerKey = $PartnerKey;
      $this->PackCode = $PackCode;
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
     * @return \Yavin\PaczkaWRuchu\Soap\LabelPrintDuplicate
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
     * @return \Yavin\PaczkaWRuchu\Soap\LabelPrintDuplicate
     */
    public function setPartnerKey($PartnerKey)
    {
      $this->PartnerKey = $PartnerKey;
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
     * @return \Yavin\PaczkaWRuchu\Soap\LabelPrintDuplicate
     */
    public function setPackCode($PackCode)
    {
      $this->PackCode = $PackCode;
      return $this;
    }

}
