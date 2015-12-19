<?php

namespace Yavin\PaczkaWRuchu\Soap;

class PutCustomerPackResponse
{

    /**
     * @var PutCustomerPackResult $PutCustomerPackResult
     */
    protected $PutCustomerPackResult = null;

    /**
     * @param PutCustomerPackResult $PutCustomerPackResult
     */
    public function __construct($PutCustomerPackResult = null)
    {
      $this->PutCustomerPackResult = $PutCustomerPackResult;
    }

    /**
     * @return PutCustomerPackResult
     */
    public function getPutCustomerPackResult()
    {
      return $this->PutCustomerPackResult;
    }

    /**
     * @param PutCustomerPackResult $PutCustomerPackResult
     * @return \Yavin\PaczkaWRuchu\Soap\PutCustomerPackResponse
     */
    public function setPutCustomerPackResult($PutCustomerPackResult)
    {
      $this->PutCustomerPackResult = $PutCustomerPackResult;
      return $this;
    }

}
