<?php

namespace Yavin\PaczkaWRuchu;

interface DataTransformerInterface
{
    /**
     * @param array $parameters
     * @return object
     */
    public function transformToModel(array $parameters);

    /**
     * @param $model
     * @return array
     */
    public function transformToParameters($model);
}
