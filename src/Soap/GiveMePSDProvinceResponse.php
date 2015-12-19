<?php

namespace Yavin\PaczkaWRuchu\Soap;

class GiveMePSDProvinceResponse
{

    /**
     * @var GiveMePSDProvinceResult $GiveMePSDProvinceResult
     */
    protected $GiveMePSDProvinceResult = null;

    /**
     * @param GiveMePSDProvinceResult $GiveMePSDProvinceResult
     */
    public function __construct($GiveMePSDProvinceResult = null)
    {
      $this->GiveMePSDProvinceResult = $GiveMePSDProvinceResult;
    }

    /**
     * @return GiveMePSDProvinceResult
     */
    public function getGiveMePSDProvinceResult()
    {
      return $this->GiveMePSDProvinceResult;
    }

    /**
     * @param GiveMePSDProvinceResult $GiveMePSDProvinceResult
     * @return \Yavin\PaczkaWRuchu\Soap\GiveMePSDProvinceResponse
     */
    public function setGiveMePSDProvinceResult($GiveMePSDProvinceResult)
    {
      $this->GiveMePSDProvinceResult = $GiveMePSDProvinceResult;
      return $this;
    }

}
