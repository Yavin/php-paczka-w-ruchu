<?php

namespace Yavin\PaczkaWRuchu\Model;

class BusinessPackInfo
{
    /**
     * @var string
     */
    private $packCode;

    /**
     * @var string
     */
    private $destinationCode;

    /**
     * @var string
     */
    private $destinationId;

    /**
     * @var string
     */
    private $packPrice;

    /**
     * @var string
     */
    private $packPaid;

    /**
     * @var string
     */
    private $labelData;

    /**
     * @return string
     */
    public function getPackCode()
    {
        return $this->packCode;
    }

    /**
     * @param string $packCode
     */
    public function setPackCode($packCode)
    {
        $this->packCode = $packCode;
    }

    /**
     * @return string
     */
    public function getDestinationCode()
    {
        return $this->destinationCode;
    }

    /**
     * @param string $destinationCode
     */
    public function setDestinationCode($destinationCode)
    {
        $this->destinationCode = $destinationCode;
    }

    /**
     * @return string
     */
    public function getDestinationId()
    {
        return $this->destinationId;
    }

    /**
     * @param string $destinationId
     */
    public function setDestinationId($destinationId)
    {
        $this->destinationId = $destinationId;
    }

    /**
     * @return string
     */
    public function getPackPrice()
    {
        return $this->packPrice;
    }

    /**
     * @param string $packPrice
     */
    public function setPackPrice($packPrice)
    {
        $this->packPrice = $packPrice;
    }

    /**
     * @return string
     */
    public function getPackPaid()
    {
        return $this->packPaid;
    }

    /**
     * @param string $packPaid
     */
    public function setPackPaid($packPaid)
    {
        $this->packPaid = $packPaid;
    }

    /**
     * @return string
     */
    public function getLabelData()
    {
        return $this->labelData;
    }

    /**
     * @param string $labelData
     */
    public function setLabelData($labelData)
    {
        $this->labelData = $labelData;
    }
}
