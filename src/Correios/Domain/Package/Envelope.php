<?php

namespace Correios\Domain\Package;

class Envelope extends Package
{
	private $_methods = [
		'lenght' => [16, 60],
		'width' => [11, 60],
	];

	public function __construct()
	{
		parent::__construct($this->_methods);	
	}

	public function add()
	{
		$args = func_get_args();
	
		if (count($this->_methods) != count($args)) {
			throw new \Exception('Error of parameter!', 1);
		}

		$i = 0;

		foreach ($this->_methods as $action => $min) {

			$this->$action($args[$i]);
			
			$i++;
		}
	
		return $this;
	}
}