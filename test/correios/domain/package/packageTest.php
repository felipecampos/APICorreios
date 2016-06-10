<?php

namespace correios\domain\package;

class PackageTest extends \PHPUnit_Framework_TestCase{

	public function setUp()
	{
       
       	$this->reflector = new \ReflectionClass('correios\domain\package\Package');
             
	}

	function testIsAbstract(){
		
		$condition = $this->reflector->isAbstract();

		$this->assertTrue($condition);
	}
	function testUseTraitDimension(){

		$condition = in_array('correios\utils\Dimension',$this->reflector->getTraitNames());

		$this->assertTrue($condition);
	}
	
}