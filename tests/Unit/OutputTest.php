<?php declare(strict_types = 1);

namespace Console\Output\Tests\Unit;

use Console\Output\Console;
use Console\Output\Modifier\Background;
use Console\Output\Modifier\Option;
use Console\Output\Modifier\Text;
use Console\Output\Tests\TestCase;

class OutputTest extends TestCase
{
    public function testTextOutputWithNoColors()
    {
        ob_start();
        Console::log('sample');
        $buffer = ob_get_clean();
        $this->assertEquals('sample', $buffer);
    }

    /**
     * @expectedException \Console\Output\Exception\Text
     * @expectedExceptionMessage Invalid text color received
     */
    public function testExceptionInvalidTextColor()
    {
        Console::log('sample', 'RGB');
    }

    /**
     * @expectedException \Console\Output\Exception\Background
     * @expectedExceptionMessage Invalid background color received
     */
    public function testExceptionInvalidBackgroundColor()
    {
        Console::log('sample', null, 'ABC');
    }

    /**
     * @expectedException \Console\Output\Exception\Option
     * @expectedExceptionMessage Invalid option received
     */
    public function testExceptionInvalidOption()
    {
        Console::log('sample', null, null, 'XYZ');
    }

    public function testTextColorGreen()
    {
        ob_start();
        Console::log('green', Text::GREEN);
        $buffer = ob_get_clean();
        $this->assertEquals("\033[0;32mgreen\033[0m", $buffer);
    }

    public function testGreenTextWithRedBackground()
    {
        ob_start();
        Console::log('greenTextWithRedBackground', Text::GREEN, Background::RED);
        $buffer = ob_get_clean();
        $this->assertEquals("\033[0;32m\033[41mgreenTextWithRedBackground\033[0m", $buffer);
    }

    public function testGreenTextWithRedBackgroundUnderlined()
    {
        ob_start();
        Console::log('greenTextWithRedBackground', Text::GREEN, Background::RED, Option::UNDERLINE);
        $buffer = ob_get_clean();
        $this->assertEquals("\033[0;32m\033[41m\033[4mgreenTextWithRedBackground\033[0m", $buffer);
    }
}