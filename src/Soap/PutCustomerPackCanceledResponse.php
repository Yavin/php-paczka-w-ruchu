<?php

namespace Yavin\PaczkaWRuchu\Soap;

class PutCustomerPackCanceledResponse
{

    /**
     * @var PutCustomerPackCanceledResult $PutCustomerPackCanceledResult
     */
    protected $PutCustomerPackCanceledResult = null;

    /**
     * @param PutCustomerPackCanceledResult $PutCustomerPackCanceledResult
     */
    public function __construct($PutCustomerPackCanceledResult = null)
    {
      $this->PutCustomerPackCanceledResult = $PutCustomerPackCanceledResult;
    }

    /**
     * @return PutCustomerPackCanceledResult
     */
    public function getPutCustomerPackCanceledResult()
    {
      return $this->PutCustomerPackCanceledResult;
    }

    /**
     * @param PutCustomerPackCanceledResult $PutCustomerPackCanceledResult
     * @return \Yavin\PaczkaWRuchu\Soap\PutCustomerPackCanceledResponse
     */
    public function setPutCustomerPackCanceledResult($PutCustomerPackCanceledResult)
    {
      $this->PutCustomerPackCanceledResult = $PutCustomerPackCanceledResult;
      return $this;
    }

}
