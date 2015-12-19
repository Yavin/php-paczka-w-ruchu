<?php

namespace Yavin\PaczkaWRuchu\Soap;

class GenerateBusinessPackResponse
{

    /**
     * @var GenerateBusinessPackResult $GenerateBusinessPackResult
     */
    protected $GenerateBusinessPackResult = null;

    /**
     * @param GenerateBusinessPackResult $GenerateBusinessPackResult
     */
    public function __construct($GenerateBusinessPackResult = null)
    {
      $this->GenerateBusinessPackResult = $GenerateBusinessPackResult;
    }

    /**
     * @return GenerateBusinessPackResult
     */
    public function getGenerateBusinessPackResult()
    {
      return $this->GenerateBusinessPackResult;
    }

    /**
     * @param GenerateBusinessPackResult $GenerateBusinessPackResult
     * @return \Yavin\PaczkaWRuchu\Soap\GenerateBusinessPackResponse
     */
    public function setGenerateBusinessPackResult($GenerateBusinessPackResult)
    {
      $this->GenerateBusinessPackResult = $GenerateBusinessPackResult;
      return $this;
    }

}
