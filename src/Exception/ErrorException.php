<?php

namespace CountriesVivran\Exception;

use CountriesVivran\Exception\ExceptionInterface;

class ErrorException extends \Exception implements ExceptionInterface
{
    protected $error;

    protected $httpBody;

    protected $httpHeaders;

    protected $httpStatus;

    //TODO: implementation
}
