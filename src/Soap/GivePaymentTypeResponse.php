<?php

namespace Yavin\PaczkaWRuchu\Soap;

class GivePaymentTypeResponse
{

    /**
     * @var GivePaymentTypeResult $GivePaymentTypeResult
     */
    protected $GivePaymentTypeResult = null;

    /**
     * @param GivePaymentTypeResult $GivePaymentTypeResult
     */
    public function __construct($GivePaymentTypeResult = null)
    {
      $this->GivePaymentTypeResult = $GivePaymentTypeResult;
    }

    /**
     * @return GivePaymentTypeResult
     */
    public function getGivePaymentTypeResult()
    {
      return $this->GivePaymentTypeResult;
    }

    /**
     * @param GivePaymentTypeResult $GivePaymentTypeResult
     * @return \Yavin\PaczkaWRuchu\Soap\GivePaymentTypeResponse
     */
    public function setGivePaymentTypeResult($GivePaymentTypeResult)
    {
      $this->GivePaymentTypeResult = $GivePaymentTypeResult;
      return $this;
    }

}
