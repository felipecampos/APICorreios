<?php

namespace correios\domain\package;


class EnvelopeTest extends \PHPUnit_Framework_TestCase{

	public function setUp()
	{
       
       	$this->class = new Envelope();
             
	}

	function testSeAddCorretamenteEDevolve(){

		$reflector = new \ReflectionClass($this->class);

		$this->assertEquals('correios\domain\package\Package',$reflector->getParentClass()->getName());
		
		$array = array('lenght'=>16,'width'=>11);
		
		$this->class->add(105,105);
		
		$this->assertEquals(array('lenght'=>60,'width'=>60),$this->class->get());
		
		$this->assertEquals($this->class,$this->class->add(3,'F'));

		$this->assertEquals(0,1);
		
		$this->assertEquals($array,$this->class->get());


	}
}