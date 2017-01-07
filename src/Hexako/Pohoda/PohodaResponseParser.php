<?php

namespace Hexako\Pohoda;

use Hexako\Exception\FileNotFoundException;

/**
 * Class PohodaResponseParser
 * @package Hexako\Pohoda
 */
class PohodaResponseParser
{

    /**
     * @var \SimpleXMLElement
     */
    protected $xml;

    /**
     * @var array
     */
    protected $ns = array();
    
    /**
     * State when file was imported successfully
     */
    const STATE_OK = 'ok';

    /**
     * Create a new PohodaResponseParser Instance
     * @param string $filename path to file
     * @throws FileNotFoundException
     */
    public function __construct($filename)
    {
        if (!file_exists($filename)) {
            throw new FileNotFoundException();
        }
        $this->xml = simplexml_load_file($filename);
        $this->ns = $this->xml->getNameSpaces(true);
    }

    /**
     * Checks if import was successful
     * @return bool
     */
    public function isOk()
    {
        $state = (string) $this->xml['state'];
        return $state == static::STATE_OK;
    }
}
