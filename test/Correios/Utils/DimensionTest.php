<?php

namespace Correios\Utils;

class DimensionTest extends \PHPUnit_Framework_TestCase 
{
	public function testSeCallConsegueDefinirOsGettersESettersQueEPassadoComoArray()
	{
		$variables = ['width' => [0, 105], 'height' => [0, 105]];

		$class = $this->getMockForTrait('Correios\Utils\Dimension', [$variables]);

		$this->assertTrue(method_exists($class, '__construct'));
		$this->assertTrue(method_exists($class, '__call'));
		$this->assertEquals($class, $class->height(2));
		$this->assertNotEquals($class, $class->Height(2));
		$this->assertEquals(2, $class->getHeight());
		$this->assertNotEquals(2, $class->getheight());
		$this->assertNotEquals($class, $class->teste(2));
		$this->assertNotEquals(2, $class->getTeste());

		$class->height('f');

		$this->assertEquals($variables['height'][0], $class->getHeight());

		$array = ['width' => 2, 'height' => 9];

		$class->height(9)->width(2);
		
		$this->assertEquals($array, $class->get());
	}
}
