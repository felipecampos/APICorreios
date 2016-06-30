<?php

namespace correios\requirements;

class LibInterfaceTest extends \PHPUnit_Framework_TestCase 
{
	/* (non-PHPdoc)
	 * @see PHPUnit_Framework_TestCase::setUp()
	 */
	protected function setUp() 
	{		
		$this->reflactor = new \ReflectionClass('Correios\Requirements\LibInterface');
		// TODO: Auto-generated method stub
	}
	
	public function testVerificaSeLibInterfaceEUmaInterface(){
		
		$condition = $this->reflactor->isInterface();
		$this->assertTrue($condition);
	}

}