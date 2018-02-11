<?php declare(strict_types = 1);


namespace Console\Tests\Unit;


use Console\Modifier\Background;
use Console\Tests\TestCase;

class BackgroundTest extends TestCase
{
    public function testGetSymbolForInvalidColor()
    {
        $this->assertNull(Background::getSymbol('nonExistingColor'));
    }
}