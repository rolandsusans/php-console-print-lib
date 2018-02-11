<?php declare(strict_types = 1);


namespace Console\Tests\Unit;


use Console\Modifier\Text;
use Console\Tests\TestCase;

class TextTest extends TestCase
{
    public function testGetSymbolForInvalidColor()
    {
        $this->assertNull(Text::getSymbol('nonExistingColor'));
    }
}