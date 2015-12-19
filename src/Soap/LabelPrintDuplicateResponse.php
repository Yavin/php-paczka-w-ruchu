<?php

namespace Yavin\PaczkaWRuchu\Soap;

class LabelPrintDuplicateResponse
{

    /**
     * @var LabelBundle $LabelPrintDuplicateResult
     */
    protected $LabelPrintDuplicateResult = null;

    /**
     * @param LabelBundle $LabelPrintDuplicateResult
     */
    public function __construct($LabelPrintDuplicateResult = null)
    {
      $this->LabelPrintDuplicateResult = $LabelPrintDuplicateResult;
    }

    /**
     * @return LabelBundle
     */
    public function getLabelPrintDuplicateResult()
    {
      return $this->LabelPrintDuplicateResult;
    }

    /**
     * @param LabelBundle $LabelPrintDuplicateResult
     * @return \Yavin\PaczkaWRuchu\Soap\LabelPrintDuplicateResponse
     */
    public function setLabelPrintDuplicateResult($LabelPrintDuplicateResult)
    {
      $this->LabelPrintDuplicateResult = $LabelPrintDuplicateResult;
      return $this;
    }

}
