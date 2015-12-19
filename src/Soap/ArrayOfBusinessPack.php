<?php

namespace Yavin\PaczkaWRuchu\Soap;

class ArrayOfBusinessPack
{

    /**
     * @var BusinessPack[] $BusinessPack
     */
    protected $BusinessPack = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BusinessPack[]
     */
    public function getBusinessPack()
    {
      return $this->BusinessPack;
    }

    /**
     * @param BusinessPack[] $BusinessPack
     * @return \Yavin\PaczkaWRuchu\Soap\ArrayOfBusinessPack
     */
    public function setBusinessPack(array $BusinessPack = null)
    {
      $this->BusinessPack = $BusinessPack;
      return $this;
    }

}
