<?php

namespace Yavin\PaczkaWRuchu\Soap;

class GivePaymentType
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
     * @param string $PartnerID
     * @param string $PartnerKey
     */
    public function __construct($PartnerID = null, $PartnerKey = null)
    {
      $this->PartnerID = $PartnerID;
      $this->PartnerKey = $PartnerKey;
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
     * @return \Yavin\PaczkaWRuchu\Soap\GivePaymentType
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
     * @return \Yavin\PaczkaWRuchu\Soap\GivePaymentType
     */
    public function setPartnerKey($PartnerKey)
    {
      $this->PartnerKey = $PartnerKey;
      return $this;
    }

}
