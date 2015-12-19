<?php

namespace Yavin\PaczkaWRuchu\Soap;

class CreateCustomerResponse
{

    /**
     * @var CreateCustomerResult $CreateCustomerResult
     */
    protected $CreateCustomerResult = null;

    /**
     * @param CreateCustomerResult $CreateCustomerResult
     */
    public function __construct($CreateCustomerResult = null)
    {
      $this->CreateCustomerResult = $CreateCustomerResult;
    }

    /**
     * @return CreateCustomerResult
     */
    public function getCreateCustomerResult()
    {
      return $this->CreateCustomerResult;
    }

    /**
     * @param CreateCustomerResult $CreateCustomerResult
     * @return \Yavin\PaczkaWRuchu\Soap\CreateCustomerResponse
     */
    public function setCreateCustomerResult($CreateCustomerResult)
    {
      $this->CreateCustomerResult = $CreateCustomerResult;
      return $this;
    }

}
