<?php

namespace Yavin\PaczkaWRuchu\Soap;

class GetGeneratedParcels
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
     * @var \DateTime $dateFrom
     */
    protected $dateFrom = null;

    /**
     * @var \DateTime $dateTo
     */
    protected $dateTo = null;

    /**
     * @param string $PartnerID
     * @param string $PartnerKey
     * @param \DateTime $dateFrom
     * @param \DateTime $dateTo
     */
    public function __construct($PartnerID = null, $PartnerKey = null, \DateTime $dateFrom = null, \DateTime $dateTo = null)
    {
      $this->PartnerID = $PartnerID;
      $this->PartnerKey = $PartnerKey;
      $this->dateFrom = $dateFrom ? $dateFrom->format(\DateTime::ATOM) : null;
      $this->dateTo = $dateTo ? $dateTo->format(\DateTime::ATOM) : null;
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
     * @return \Yavin\PaczkaWRuchu\Soap\GetGeneratedParcels
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
     * @return \Yavin\PaczkaWRuchu\Soap\GetGeneratedParcels
     */
    public function setPartnerKey($PartnerKey)
    {
      $this->PartnerKey = $PartnerKey;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateFrom()
    {
      if ($this->dateFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->dateFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $dateFrom
     * @return \Yavin\PaczkaWRuchu\Soap\GetGeneratedParcels
     */
    public function setDateFrom(\DateTime $dateFrom)
    {
      $this->dateFrom = $dateFrom->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateTo()
    {
      if ($this->dateTo == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->dateTo);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $dateTo
     * @return \Yavin\PaczkaWRuchu\Soap\GetGeneratedParcels
     */
    public function setDateTo(\DateTime $dateTo)
    {
      $this->dateTo = $dateTo->format(\DateTime::ATOM);
      return $this;
    }

}
