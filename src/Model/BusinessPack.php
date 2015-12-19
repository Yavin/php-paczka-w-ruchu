<?php

namespace Yavin\PaczkaWRuchu\Model;

class BusinessPack
{
    /**
     * @var string
     */
    private $destinationCode;

    /**
     * @var string
     */
    private $alternativeDestinationCode;

    /**
     * @var string
     */
    private $returnDestinationCode;

    /**
     * @var string
     */
    private $boxSize;

    /**
     * @var string
     */
    private $packValue;

    /**
     * @var string
     */
    private $cashOnDelivery;

    /**
     * @var string
     */
    private $amoundCashOnDelivery;

    /**
     * @var boolean
     */
    private $insurance;

    /**
     * @var Recipient
     */
    private $recipient;

    /**
     * @var Sender
     */
    private $sender;

    /**
     * @var ReturnAddress
     */
    private $returnAddress;

    /**
     * @var string
     */
    private $printAddress;

    /**
     * @var boolean
     */
    private $returnPack;

    /**
     * @var string
     */
    private $transferDescription;

    /**
     * @var boolean
     */
    private $returnAvailable;

    /**
     * @var int
     */
    private $returnQuantity;

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
    public function getAlternativeDestinationCode()
    {
        return $this->alternativeDestinationCode;
    }

    /**
     * @param string $alternativeDestinationCode
     */
    public function setAlternativeDestinationCode($alternativeDestinationCode)
    {
        $this->alternativeDestinationCode = $alternativeDestinationCode;
    }

    /**
     * @return string
     */
    public function getReturnDestinationCode()
    {
        return $this->returnDestinationCode;
    }

    /**
     * @param string $returnDestinationCode
     */
    public function setReturnDestinationCode($returnDestinationCode)
    {
        $this->returnDestinationCode = $returnDestinationCode;
    }

    /**
     * @return string
     */
    public function getBoxSize()
    {
        return $this->boxSize;
    }

    /**
     * @param string $boxSize
     */
    public function setBoxSize($boxSize)
    {
        $this->boxSize = $boxSize;
    }

    /**
     * @return string
     */
    public function getPackValue()
    {
        return $this->packValue;
    }

    /**
     * @param string $packValue
     */
    public function setPackValue($packValue)
    {
        $this->packValue = $packValue;
    }

    /**
     * @return string
     */
    public function getCashOnDelivery()
    {
        return $this->cashOnDelivery;
    }

    /**
     * @param string $cashOnDelivery
     */
    public function setCashOnDelivery($cashOnDelivery)
    {
        $this->cashOnDelivery = $cashOnDelivery;
    }

    /**
     * @return string
     */
    public function getAmoundCashOnDelivery()
    {
        return $this->amoundCashOnDelivery;
    }

    /**
     * @param string $amoundCashOnDelivery
     */
    public function setAmoundCashOnDelivery($amoundCashOnDelivery)
    {
        $this->amoundCashOnDelivery = $amoundCashOnDelivery;
    }

    /**
     * @return boolean
     */
    public function isInsurance()
    {
        return $this->insurance;
    }

    /**
     * @param boolean $insurance
     */
    public function setInsurance($insurance)
    {
        $this->insurance = $insurance;
    }

    /**
     * @return Recipient
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * @param Recipient $recipient
     */
    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;
    }

    /**
     * @return Sender
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param Sender $sender
     */
    public function setSender($sender)
    {
        $this->sender = $sender;
    }

    /**
     * @return ReturnAddress
     */
    public function getReturnAddress()
    {
        return $this->returnAddress;
    }

    /**
     * @param ReturnAddress $returnAddress
     */
    public function setReturnAddress($returnAddress)
    {
        $this->returnAddress = $returnAddress;
    }

    /**
     * @return string
     */
    public function getPrintAddress()
    {
        return $this->printAddress;
    }

    /**
     * @param string $printAddress
     */
    public function setPrintAddress($printAddress)
    {
        $this->printAddress = $printAddress;
    }

    /**
     * @return boolean
     */
    public function isReturnPack()
    {
        return $this->returnPack;
    }

    /**
     * @param boolean $returnPack
     */
    public function setReturnPack($returnPack)
    {
        $this->returnPack = $returnPack;
    }

    /**
     * @return string
     */
    public function getTransferDescription()
    {
        return $this->transferDescription;
    }

    /**
     * @param string $transferDescription
     */
    public function setTransferDescription($transferDescription)
    {
        $this->transferDescription = $transferDescription;
    }

    /**
     * @return boolean
     */
    public function isReturnAvailable()
    {
        return $this->returnAvailable;
    }

    /**
     * @param boolean $returnAvailable
     */
    public function setReturnAvailable($returnAvailable)
    {
        $this->returnAvailable = $returnAvailable;
    }

    /**
     * @return int
     */
    public function getReturnQuantity()
    {
        return $this->returnQuantity;
    }

    /**
     * @param int $returnQuantity
     */
    public function setReturnQuantity($returnQuantity)
    {
        $this->returnQuantity = $returnQuantity;
    }
}
