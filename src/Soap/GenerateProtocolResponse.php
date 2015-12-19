<?php

namespace Yavin\PaczkaWRuchu\Soap;

class GenerateProtocolResponse
{

    /**
     * @var GenerateProtocolResult $GenerateProtocolResult
     */
    protected $GenerateProtocolResult = null;

    /**
     * @var base64Binary $LabelData
     */
    protected $LabelData = null;

    /**
     * @param GenerateProtocolResult $GenerateProtocolResult
     * @param base64Binary $LabelData
     */
    public function __construct($GenerateProtocolResult = null, $LabelData = null)
    {
      $this->GenerateProtocolResult = $GenerateProtocolResult;
      $this->LabelData = $LabelData;
    }

    /**
     * @return GenerateProtocolResult
     */
    public function getGenerateProtocolResult()
    {
      return $this->GenerateProtocolResult;
    }

    /**
     * @param GenerateProtocolResult $GenerateProtocolResult
     * @return \Yavin\PaczkaWRuchu\Soap\GenerateProtocolResponse
     */
    public function setGenerateProtocolResult($GenerateProtocolResult)
    {
      $this->GenerateProtocolResult = $GenerateProtocolResult;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getLabelData()
    {
      return $this->LabelData;
    }

    /**
     * @param base64Binary $LabelData
     * @return \Yavin\PaczkaWRuchu\Soap\GenerateProtocolResponse
     */
    public function setLabelData($LabelData)
    {
      $this->LabelData = $LabelData;
      return $this;
    }

}
