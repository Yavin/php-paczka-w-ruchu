<?php

namespace Yavin\PaczkaWRuchu\Model;

class Sender extends Address
{
    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $number;

    /**
     * @var string
     */
    private $orders;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * @param string $orders
     */
    public function setOrders($orders)
    {
        $this->orders = $orders;
    }
}
