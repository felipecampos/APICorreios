<?php

namespace correios\domain\package;

class BoxTest extends \PHPUnit_Framework_TestCase{

	public function setUp()
	{
       
       	$this->class = new Box();
             
	}

	function testSeAddCorretamenteEDevolve(){

		$reflector = new \ReflectionClass($this->class);

		$this->assertEquals('correios\domain\package\Package',$reflector->getParentClass()->getName());
		
		$array = array('lenght'=> 16 ,'width'=> 11 ,'height'=> 2);
		
		$this->assertFalse($this->class->add(105,105,105));
		
		$this->assertEquals($this->class,$this->class->add(3,4,'F'));
		
		$this->assertEquals($array,$this->class->get());

	}
	
}