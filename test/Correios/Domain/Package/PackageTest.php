<?php

namespace Correios\Domain\Package;

class PackageTest extends \PHPUnit_Framework_TestCase
{
	public function setUp()
	{       
       	$this->reflector = new \ReflectionClass('Correios\Domain\Package\Package');
	}

	public function testIsAbstract()
	{
		$condition = $this->reflector->isAbstract();
		$this->assertTrue($condition);
	}

	public function testUseTraitDimension()
	{
		$condition = in_array('Correios\Utils\Dimension', $this->reflector->getTraitNames());
		$this->assertTrue($condition);
	}
}
