<?php

namespace Correios\Requirements;

class CurlLibTest extends \PHPUnit_Framework_TestCase 
{
	/* (non-PHPdoc)
	 * @see PHPUnit_Framework_TestCase::setUp()
	 */
	protected function setUp() 
	{
		$this->class = new CurlLib();
		// TODO: Auto-generated method stub
	}
	
	public function testVerificaSeALibCurlEstaInstalada()
	{
		$condition = $this->class->installed();
		$this->assertTrue($condition);
	}
}
