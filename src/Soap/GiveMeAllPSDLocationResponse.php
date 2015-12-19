<?php

namespace Yavin\PaczkaWRuchu\Soap;

class GiveMeAllPSDLocationResponse
{

    /**
     * @var GiveMeAllPSDLocationResult $GiveMeAllPSDLocationResult
     */
    protected $GiveMeAllPSDLocationResult = null;

    /**
     * @param GiveMeAllPSDLocationResult $GiveMeAllPSDLocationResult
     */
    public function __construct($GiveMeAllPSDLocationResult = null)
    {
      $this->GiveMeAllPSDLocationResult = $GiveMeAllPSDLocationResult;
    }

    /**
     * @return GiveMeAllPSDLocationResult
     */
    public function getGiveMeAllPSDLocationResult()
    {
      return $this->GiveMeAllPSDLocationResult;
    }

    /**
     * @param GiveMeAllPSDLocationResult $GiveMeAllPSDLocationResult
     * @return \Yavin\PaczkaWRuchu\Soap\GiveMeAllPSDLocationResponse
     */
    public function setGiveMeAllPSDLocationResult($GiveMeAllPSDLocationResult)
    {
      $this->GiveMeAllPSDLocationResult = $GiveMeAllPSDLocationResult;
      return $this;
    }

}
