<?php

namespace Yavin\PaczkaWRuchu\Soap;

class GivePartnerStatusResponse
{

    /**
     * @var GivePartnerStatusResult $GivePartnerStatusResult
     */
    protected $GivePartnerStatusResult = null;

    /**
     * @param GivePartnerStatusResult $GivePartnerStatusResult
     */
    public function __construct($GivePartnerStatusResult = null)
    {
      $this->GivePartnerStatusResult = $GivePartnerStatusResult;
    }

    /**
     * @return GivePartnerStatusResult
     */
    public function getGivePartnerStatusResult()
    {
      return $this->GivePartnerStatusResult;
    }

    /**
     * @param GivePartnerStatusResult $GivePartnerStatusResult
     * @return \Yavin\PaczkaWRuchu\Soap\GivePartnerStatusResponse
     */
    public function setGivePartnerStatusResult($GivePartnerStatusResult)
    {
      $this->GivePartnerStatusResult = $GivePartnerStatusResult;
      return $this;
    }

}
