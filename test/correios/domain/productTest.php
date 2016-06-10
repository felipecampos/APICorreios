<?php

namespace correios\domain;

class ProductTest extends \PHPUnit_Framework_TestCase {


	public function setUp()
	{	
		$this->class = new Product();
       
       	$this->reflector = new \ReflectionClass($this->class);
             
	}

	
	function testUseTraitDimension(){

		$condition = in_array('correios\utils\Dimension',$this->reflector->getTraitNames());

		$this->assertTrue($condition);
	}

	

	function testIfMethodAddIncludedCorrectTypePackage(){

		$this->class->add(0,0,0,0,0,1);

		$this->assertEquals(1,$this->class->getPackage());

		$this->class->add(0,0,0,0,0,'F');

		$this->assertEquals(0,$this->class->getPackage());

		

	}
	
	public function testGetAllVariables(){

		$class = $this->class->add(10,12,13,14,15,1);

		$this->assertEquals($this->class,$class);

		$array = array(
		    'weight' => 10,
		    'length' => 12,
		    'diameter' => 13,
		    'width' => 14,
		    'height' => 15,
		    'package' => 1
		);

		$this->assertEquals($array, $class->get());
	}
}