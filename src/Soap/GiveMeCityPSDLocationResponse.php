<?php

namespace Yavin\PaczkaWRuchu\Soap;

class GiveMeCityPSDLocationResponse
{

    /**
     * @var GiveMeCityPSDLocationResult $GiveMeCityPSDLocationResult
     */
    protected $GiveMeCityPSDLocationResult = null;

    /**
     * @param GiveMeCityPSDLocationResult $GiveMeCityPSDLocationResult
     */
    public function __construct($GiveMeCityPSDLocationResult = null)
    {
      $this->GiveMeCityPSDLocationResult = $GiveMeCityPSDLocationResult;
    }

    /**
     * @return GiveMeCityPSDLocationResult
     */
    public function getGiveMeCityPSDLocationResult()
    {
      return $this->GiveMeCityPSDLocationResult;
    }

    /**
     * @param GiveMeCityPSDLocationResult $GiveMeCityPSDLocationResult
     * @return \Yavin\PaczkaWRuchu\Soap\GiveMeCityPSDLocationResponse
     */
    public function setGiveMeCityPSDLocationResult($GiveMeCityPSDLocationResult)
    {
      $this->GiveMeCityPSDLocationResult = $GiveMeCityPSDLocationResult;
      return $this;
    }

}
