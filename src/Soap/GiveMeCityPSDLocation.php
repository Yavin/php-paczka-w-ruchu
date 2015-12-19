<?php

namespace Yavin\PaczkaWRuchu\Soap;

class GiveMeCityPSDLocation
{

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @param string $City
     */
    public function __construct($City = null)
    {
      $this->City = $City;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return \Yavin\PaczkaWRuchu\Soap\GiveMeCityPSDLocation
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

}
