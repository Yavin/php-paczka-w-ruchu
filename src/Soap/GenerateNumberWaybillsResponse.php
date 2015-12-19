<?php

namespace Yavin\PaczkaWRuchu\Soap;

class GenerateNumberWaybillsResponse
{

    /**
     * @var GenerateNumberWaybillsResult $GenerateNumberWaybillsResult
     */
    protected $GenerateNumberWaybillsResult = null;

    /**
     * @param GenerateNumberWaybillsResult $GenerateNumberWaybillsResult
     */
    public function __construct($GenerateNumberWaybillsResult = null)
    {
      $this->GenerateNumberWaybillsResult = $GenerateNumberWaybillsResult;
    }

    /**
     * @return GenerateNumberWaybillsResult
     */
    public function getGenerateNumberWaybillsResult()
    {
      return $this->GenerateNumberWaybillsResult;
    }

    /**
     * @param GenerateNumberWaybillsResult $GenerateNumberWaybillsResult
     * @return \Yavin\PaczkaWRuchu\Soap\GenerateNumberWaybillsResponse
     */
    public function setGenerateNumberWaybillsResult($GenerateNumberWaybillsResult)
    {
      $this->GenerateNumberWaybillsResult = $GenerateNumberWaybillsResult;
      return $this;
    }

}
