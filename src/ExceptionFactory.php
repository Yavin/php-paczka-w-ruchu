<?php

namespace Yavin\PaczkaWRuchu;

use Yavin\PaczkaWRuchu\Exception\PWRException;

class ExceptionFactory
{
    private $exceptionMap = [
        100 => 'Yavin\PaczkaWRuchu\Exception\CredencialsException',
        101 => 'Yavin\PaczkaWRuchu\Exception\CredencialsException',
        200 => 'Yavin\PaczkaWRuchu\Exception\CredencialsException',

        103 => 'Yavin\PaczkaWRuchu\Exception\RequiredFieldException',
        104 => 'Yavin\PaczkaWRuchu\Exception\RequiredFieldException',
        105 => 'Yavin\PaczkaWRuchu\Exception\RequiredFieldException',
        106 => 'Yavin\PaczkaWRuchu\Exception\RequiredFieldException',
        107 => 'Yavin\PaczkaWRuchu\Exception\RequiredFieldException',
        111 => 'Yavin\PaczkaWRuchu\Exception\RequiredFieldException',
        112 => 'Yavin\PaczkaWRuchu\Exception\RequiredFieldException',
        113 => 'Yavin\PaczkaWRuchu\Exception\RequiredFieldException',
        114 => 'Yavin\PaczkaWRuchu\Exception\RequiredFieldException',
        115 => 'Yavin\PaczkaWRuchu\Exception\RequiredFieldException',
        116 => 'Yavin\PaczkaWRuchu\Exception\RequiredFieldException',
        117 => 'Yavin\PaczkaWRuchu\Exception\RequiredFieldException',
        120 => 'Yavin\PaczkaWRuchu\Exception\RequiredFieldException',
        121 => 'Yavin\PaczkaWRuchu\Exception\RequiredFieldException',
        123 => 'Yavin\PaczkaWRuchu\Exception\RequiredFieldException',
        124 => 'Yavin\PaczkaWRuchu\Exception\RequiredFieldException',
        125 => 'Yavin\PaczkaWRuchu\Exception\RequiredFieldException',
        126 => 'Yavin\PaczkaWRuchu\Exception\RequiredFieldException',
        127 => 'Yavin\PaczkaWRuchu\Exception\RequiredFieldException',
        128 => 'Yavin\PaczkaWRuchu\Exception\RequiredFieldException',
        129 => 'Yavin\PaczkaWRuchu\Exception\RequiredFieldException',

        130 => 'Yavin\PaczkaWRuchu\Exception\InvalidValueException',
        131 => 'Yavin\PaczkaWRuchu\Exception\InvalidValueException',
        133 => 'Yavin\PaczkaWRuchu\Exception\InvalidValueException',
        134 => 'Yavin\PaczkaWRuchu\Exception\InvalidValueException',
        135 => 'Yavin\PaczkaWRuchu\Exception\InvalidValueException',
        136 => 'Yavin\PaczkaWRuchu\Exception\InvalidValueException',
        137 => 'Yavin\PaczkaWRuchu\Exception\InvalidValueException',
        138 => 'Yavin\PaczkaWRuchu\Exception\InvalidValueException',
        140 => 'Yavin\PaczkaWRuchu\Exception\InvalidValueException',
        150 => 'Yavin\PaczkaWRuchu\Exception\InvalidValueException',
        163 => 'Yavin\PaczkaWRuchu\Exception\InvalidValueException',

        201 => 'Yavin\PaczkaWRuchu\Exception\LogicException',
        202 => 'Yavin\PaczkaWRuchu\Exception\LogicException',
        205 => 'Yavin\PaczkaWRuchu\Exception\LogicException',
        206 => 'Yavin\PaczkaWRuchu\Exception\LogicException',
        207 => 'Yavin\PaczkaWRuchu\Exception\LogicException',
        208 => 'Yavin\PaczkaWRuchu\Exception\LogicException',
        209 => 'Yavin\PaczkaWRuchu\Exception\LogicException',

        6 => 'Yavin\PaczkaWRuchu\Exception\PWRException',
        7 => 'Yavin\PaczkaWRuchu\Exception\PWRException',
        8 => 'Yavin\PaczkaWRuchu\Exception\PWRException',
    ];

    public function create($code, $message)
    {
        if (isset($this->exceptionMap[$code])) {
            $className = $this->exceptionMap[$code];
            return new $className($message, $code);
        }

        return new PWRException($message, $code);
    }
}
