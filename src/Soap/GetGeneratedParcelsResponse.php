<?php

namespace Yavin\PaczkaWRuchu\Soap;

class GetGeneratedParcelsResponse
{

    /**
     * @var GetGeneratedParcelsResult $GetGeneratedParcelsResult
     */
    protected $GetGeneratedParcelsResult = null;

    /**
     * @param GetGeneratedParcelsResult $GetGeneratedParcelsResult
     */
    public function __construct($GetGeneratedParcelsResult = null)
    {
      $this->GetGeneratedParcelsResult = $GetGeneratedParcelsResult;
    }

    /**
     * @return GetGeneratedParcelsResult
     */
    public function getGetGeneratedParcelsResult()
    {
      return $this->GetGeneratedParcelsResult;
    }

    /**
     * @param GetGeneratedParcelsResult $GetGeneratedParcelsResult
     * @return \Yavin\PaczkaWRuchu\Soap\GetGeneratedParcelsResponse
     */
    public function setGetGeneratedParcelsResult($GetGeneratedParcelsResult)
    {
      $this->GetGeneratedParcelsResult = $GetGeneratedParcelsResult;
      return $this;
    }

}
