<?php

namespace Yavin\PaczkaWRuchu\Soap;

class ArrayOfUnsignedLong
{

    /**
     * @var unsignedLong[] $unsignedLong
     */
    protected $unsignedLong = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return unsignedLong[]
     */
    public function getUnsignedLong()
    {
      return $this->unsignedLong;
    }

    /**
     * @param unsignedLong[] $unsignedLong
     * @return \Yavin\PaczkaWRuchu\Soap\ArrayOfUnsignedLong
     */
    public function setUnsignedLong(array $unsignedLong = null)
    {
      $this->unsignedLong = $unsignedLong;
      return $this;
    }

}
