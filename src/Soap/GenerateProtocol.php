<?php

namespace Yavin\PaczkaWRuchu\Soap;

class GenerateProtocol
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
     * @var ArrayOfUnsignedLong $parcels
     */
    protected $parcels = null;

    /**
     * @param string $PartnerID
     * @param string $PartnerKey
     * @param ArrayOfUnsignedLong $parcels
     */
    public function __construct($PartnerID = null, $PartnerKey = null, $parcels = null)
    {
      $this->PartnerID = $PartnerID;
      $this->PartnerKey = $PartnerKey;
      $this->parcels = $parcels;
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
     * @return \Yavin\PaczkaWRuchu\Soap\GenerateProtocol
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
     * @return \Yavin\PaczkaWRuchu\Soap\GenerateProtocol
     */
    public function setPartnerKey($PartnerKey)
    {
      $this->PartnerKey = $PartnerKey;
      return $this;
    }

    /**
     * @return ArrayOfUnsignedLong
     */
    public function getParcels()
    {
      return $this->parcels;
    }

    /**
     * @param ArrayOfUnsignedLong $parcels
     * @return \Yavin\PaczkaWRuchu\Soap\GenerateProtocol
     */
    public function setParcels($parcels)
    {
      $this->parcels = $parcels;
      return $this;
    }

}
