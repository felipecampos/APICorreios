<?php

namespace Correios\Domain;

class Product
{
	use \Correios\Utils\Dimension {
		__construct as __constructM;
	}

	private $_methods = [
		'weight' => [0, 105],
		'length' => [0, 105],
		'diameter' => [0, 105],
		'width' => [0, 105],
		'height' => [0, 105],
		'package' => [0, 105]
	];

	public function __construct()
	{
		$this->__constructM($this->_methods);
	}

	public function add()
	{
		$args = func_get_args();

		if (count($this->_methods) != count($args)) {
			throw new \Exception('Error of parameter!', 1);
		}

		$i = 0;

		foreach ($this->_methods as $action=>$min) {
			
			if ($i == 5) {

				if ( ! in_array($args[$i],array(1,2,3))) {
					$args[$i] = 0;
				}
			}
				
			$this->$action($args[$i]);
			
			$i++;
		}	

		return $this;
	}
}
