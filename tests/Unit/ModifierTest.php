<?php declare(strict_types = 1);


namespace Console\Tests\Unit;


use Console\Modifier\Modifier;
use Console\Tests\TestCase;

class ModifierTest extends TestCase
{
    public function testGetAllOfUndefined()
    {
        $stub = $this->getMockForAbstractClass(Modifier::class);
        $this->assertEquals([], $stub::getAll('NotExistingClass'));
    }
}