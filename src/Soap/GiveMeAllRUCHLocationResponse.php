<?php

namespace Yavin\PaczkaWRuchu\Soap;

class GiveMeAllRUCHLocationResponse
{

    /**
     * @var GiveMeAllRUCHLocationResult $GiveMeAllRUCHLocationResult
     */
    protected $GiveMeAllRUCHLocationResult = null;

    /**
     * @param GiveMeAllRUCHLocationResult $GiveMeAllRUCHLocationResult
     */
    public function __construct($GiveMeAllRUCHLocationResult = null)
    {
      $this->GiveMeAllRUCHLocationResult = $GiveMeAllRUCHLocationResult;
    }

    /**
     * @return GiveMeAllRUCHLocationResult
     */
    public function getGiveMeAllRUCHLocationResult()
    {
      return $this->GiveMeAllRUCHLocationResult;
    }

    /**
     * @param GiveMeAllRUCHLocationResult $GiveMeAllRUCHLocationResult
     * @return \Yavin\PaczkaWRuchu\Soap\GiveMeAllRUCHLocationResponse
     */
    public function setGiveMeAllRUCHLocationResult($GiveMeAllRUCHLocationResult)
    {
      $this->GiveMeAllRUCHLocationResult = $GiveMeAllRUCHLocationResult;
      return $this;
    }

}
