<?php

namespace Yavin\PaczkaWRuchu\Soap;

class GiveMePackStatusResponse
{

    /**
     * @var GiveMePackStatusResult $GiveMePackStatusResult
     */
    protected $GiveMePackStatusResult = null;

    /**
     * @param GiveMePackStatusResult $GiveMePackStatusResult
     */
    public function __construct($GiveMePackStatusResult = null)
    {
      $this->GiveMePackStatusResult = $GiveMePackStatusResult;
    }

    /**
     * @return GiveMePackStatusResult
     */
    public function getGiveMePackStatusResult()
    {
      return $this->GiveMePackStatusResult;
    }

    /**
     * @param GiveMePackStatusResult $GiveMePackStatusResult
     * @return \Yavin\PaczkaWRuchu\Soap\GiveMePackStatusResponse
     */
    public function setGiveMePackStatusResult($GiveMePackStatusResult)
    {
      $this->GiveMePackStatusResult = $GiveMePackStatusResult;
      return $this;
    }

}
