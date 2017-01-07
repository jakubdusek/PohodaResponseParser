<?php

namespace Hexako\Pohoda;

/**
 * Class PohodaResponseParserTest
 * @package Hexako\Pohoda
 */
class PohodaResponseParserTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test if is imported XML ok or not
     */
    public function testIsOk()
    {
        $parser = new PohodaResponseParser('./xmls/invoice_ok.xml');
        $this->assertTrue($parser->isOk());

        $parser = new PohodaResponseParser('./xmls/invoice_error.xml');
        $this->assertFalse($parser->isOk());
    }

    /**
     * Test if throws file not found exception
     */
    public function testFileNotFound()
    {
        try {
            new PohodaResponseParser('./xmls/doesntExist.xml');
        } catch (\Hexako\Exception\FileNotFoundException $e) {
            $this->assertEquals("File not found", $e->getMessage());
            $this->assertEquals(404, $e->getCode());
        }
    }
}
