<?php

namespace app\Exceptions;


use App\Fuck;
use Exception;

class TokenExpiredException extends Exception
{
    private $fuck;

    public function __construct(Fuck $fuck, Exception $previous = NULL)
    {
        $this->fuck = $fuck;
        parent::__construct('Token expired', NULL, $previous);
    }
}