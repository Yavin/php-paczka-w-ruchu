<?php

namespace Yavin\PaczkaWRuchu\Soap;

class GenerateLabelBusinessPackList
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
     * @var FormatPliku $Format
     */
    protected $Format = null;

    /**
     * @var ArrayOfBusinessPack $BusinessPackList
     */
    protected $BusinessPackList = null;

    /**
     * @param string $PartnerID
     * @param string $PartnerKey
     * @param FormatPliku $Format
     * @param ArrayOfBusinessPack $BusinessPackList
     */
    public function __construct($PartnerID = null, $PartnerKey = null, $Format = null, $BusinessPackList = null)
    {
      $this->PartnerID = $PartnerID;
      $this->PartnerKey = $PartnerKey;
      $this->Format = $Format;
      $this->BusinessPackList = $BusinessPackList;
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
     * @return \Yavin\PaczkaWRuchu\Soap\GenerateLabelBusinessPackList
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
     * @return \Yavin\PaczkaWRuchu\Soap\GenerateLabelBusinessPackList
     */
    public function setPartnerKey($PartnerKey)
    {
      $this->PartnerKey = $PartnerKey;
      return $this;
    }

    /**
     * @return FormatPliku
     */
    public function getFormat()
    {
      return $this->Format;
    }

    /**
     * @param FormatPliku $Format
     * @return \Yavin\PaczkaWRuchu\Soap\GenerateLabelBusinessPackList
     */
    public function setFormat($Format)
    {
      $this->Format = $Format;
      return $this;
    }

    /**
     * @return ArrayOfBusinessPack
     */
    public function getBusinessPackList()
    {
      return $this->BusinessPackList;
    }

    /**
     * @param ArrayOfBusinessPack $BusinessPackList
     * @return \Yavin\PaczkaWRuchu\Soap\GenerateLabelBusinessPackList
     */
    public function setBusinessPackList($BusinessPackList)
    {
      $this->BusinessPackList = $BusinessPackList;
      return $this;
    }

}
