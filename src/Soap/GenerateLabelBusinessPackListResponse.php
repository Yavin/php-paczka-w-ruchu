<?php

namespace Yavin\PaczkaWRuchu\Soap;

class GenerateLabelBusinessPackListResponse
{

    /**
     * @var GenerateLabelBusinessPackListResult $GenerateLabelBusinessPackListResult
     */
    protected $GenerateLabelBusinessPackListResult = null;

    /**
     * @var base64Binary $LabelData
     */
    protected $LabelData = null;

    /**
     * @param GenerateLabelBusinessPackListResult $GenerateLabelBusinessPackListResult
     * @param base64Binary $LabelData
     */
    public function __construct($GenerateLabelBusinessPackListResult = null, $LabelData = null)
    {
      $this->GenerateLabelBusinessPackListResult = $GenerateLabelBusinessPackListResult;
      $this->LabelData = $LabelData;
    }

    /**
     * @return GenerateLabelBusinessPackListResult
     */
    public function getGenerateLabelBusinessPackListResult()
    {
      return $this->GenerateLabelBusinessPackListResult;
    }

    /**
     * @param GenerateLabelBusinessPackListResult $GenerateLabelBusinessPackListResult
     * @return \Yavin\PaczkaWRuchu\Soap\GenerateLabelBusinessPackListResponse
     */
    public function setGenerateLabelBusinessPackListResult($GenerateLabelBusinessPackListResult)
    {
      $this->GenerateLabelBusinessPackListResult = $GenerateLabelBusinessPackListResult;
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
     * @return \Yavin\PaczkaWRuchu\Soap\GenerateLabelBusinessPackListResponse
     */
    public function setLabelData($LabelData)
    {
      $this->LabelData = $LabelData;
      return $this;
    }

}
