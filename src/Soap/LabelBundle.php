<?php

namespace Yavin\PaczkaWRuchu\Soap;

class LabelBundle
{

    /**
     * @var string $Err
     */
    protected $Err = null;

    /**
     * @var string $ErrDes
     */
    protected $ErrDes = null;

    /**
     * @var base64Binary $Label
     */
    protected $Label = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getErr()
    {
      return $this->Err;
    }

    /**
     * @param string $Err
     * @return \Yavin\PaczkaWRuchu\Soap\LabelBundle
     */
    public function setErr($Err)
    {
      $this->Err = $Err;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrDes()
    {
      return $this->ErrDes;
    }

    /**
     * @param string $ErrDes
     * @return \Yavin\PaczkaWRuchu\Soap\LabelBundle
     */
    public function setErrDes($ErrDes)
    {
      $this->ErrDes = $ErrDes;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getLabel()
    {
      return $this->Label;
    }

    /**
     * @param base64Binary $Label
     * @return \Yavin\PaczkaWRuchu\Soap\LabelBundle
     */
    public function setLabel($Label)
    {
      $this->Label = $Label;
      return $this;
    }

}
