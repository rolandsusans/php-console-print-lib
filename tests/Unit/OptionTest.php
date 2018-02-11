<?php declare(strict_types = 1);


namespace Console\Tests\Unit;


use Console\Modifier\Option;
use Console\Tests\TestCase;

class OptionTest extends TestCase
{
    public function testGetSymbolForInvalidOption(){
        $this->assertNull(Option::getSymbol('nonExistingOption'));
    }
}