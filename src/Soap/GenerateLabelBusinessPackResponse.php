<?php

namespace Yavin\PaczkaWRuchu\Soap;

class GenerateLabelBusinessPackResponse
{

    /**
     * @var GenerateLabelBusinessPackResult $GenerateLabelBusinessPackResult
     */
    protected $GenerateLabelBusinessPackResult = null;

    /**
     * @var base64Binary $LabelData
     */
    protected $LabelData = null;

    /**
     * @param GenerateLabelBusinessPackResult $GenerateLabelBusinessPackResult
     * @param base64Binary $LabelData
     */
    public function __construct($GenerateLabelBusinessPackResult = null, $LabelData = null)
    {
      $this->GenerateLabelBusinessPackResult = $GenerateLabelBusinessPackResult;
      $this->LabelData = $LabelData;
    }

    /**
     * @return GenerateLabelBusinessPackResult
     */
    public function getGenerateLabelBusinessPackResult()
    {
      return $this->GenerateLabelBusinessPackResult;
    }

    /**
     * @param GenerateLabelBusinessPackResult $GenerateLabelBusinessPackResult
     * @return \Yavin\PaczkaWRuchu\Soap\GenerateLabelBusinessPackResponse
     */
    public function setGenerateLabelBusinessPackResult($GenerateLabelBusinessPackResult)
    {
      $this->GenerateLabelBusinessPackResult = $GenerateLabelBusinessPackResult;
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
     * @return \Yavin\PaczkaWRuchu\Soap\GenerateLabelBusinessPackResponse
     */
    public function setLabelData($LabelData)
    {
      $this->LabelData = $LabelData;
      return $this;
    }

}
