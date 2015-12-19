<?php

namespace Yavin\PaczkaWRuchu\Soap;

class GiveMePSDZipcodeResponse
{

    /**
     * @var GiveMePSDZipcodeResult $GiveMePSDZipcodeResult
     */
    protected $GiveMePSDZipcodeResult = null;

    /**
     * @param GiveMePSDZipcodeResult $GiveMePSDZipcodeResult
     */
    public function __construct($GiveMePSDZipcodeResult = null)
    {
      $this->GiveMePSDZipcodeResult = $GiveMePSDZipcodeResult;
    }

    /**
     * @return GiveMePSDZipcodeResult
     */
    public function getGiveMePSDZipcodeResult()
    {
      return $this->GiveMePSDZipcodeResult;
    }

    /**
     * @param GiveMePSDZipcodeResult $GiveMePSDZipcodeResult
     * @return \Yavin\PaczkaWRuchu\Soap\GiveMePSDZipcodeResponse
     */
    public function setGiveMePSDZipcodeResult($GiveMePSDZipcodeResult)
    {
      $this->GiveMePSDZipcodeResult = $GiveMePSDZipcodeResult;
      return $this;
    }

}
