<?php

/**
 * @package Quibble\Dabble
 */

namespace Quibble\Dabble;

class InsertException extends Exception
{
    public function __construct($m = '', $c = null, $p = null)
    {
        parent::__construct($m, self::NOAFFECTEDROWS, $p);
    }
}
