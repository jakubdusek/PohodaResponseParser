<?php

namespace Hexako\Exception;

/**
 * Class FileNotFoundException
 * @package Hexako\Exception
 */
class FileNotFoundException extends \Exception
{
    /**
     * FileNotFoundException constructor.
     */
    public function __construct()
    {
        $message = "File not found";
        $code = 404;
        parent::__construct($message, $code);
    }
}
