<?php

namespace Yavin\PaczkaWRuchu\Soap;

class GiveMePSDProvince
{

    /**
     * @var string $Province
     */
    protected $Province = null;

    /**
     * @param string $Province
     */
    public function __construct($Province = null)
    {
      $this->Province = $Province;
    }

    /**
     * @return string
     */
    public function getProvince()
    {
      return $this->Province;
    }

    /**
     * @param string $Province
     * @return \Yavin\PaczkaWRuchu\Soap\GiveMePSDProvince
     */
    public function setProvince($Province)
    {
      $this->Province = $Province;
      return $this;
    }

}
