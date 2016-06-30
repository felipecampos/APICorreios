<?php

namespace correios\utils;

trait Dimension
{
	private $_methods;

	public function __construct(array $variables)
	{
		$this->_methods = $variables;
	}

	public function __call($method, $args)
	{
		$search = $method;

		$m = substr($method, 0,3);

		if ($m == 'get') {
			$search = strtolower(substr($method,3));
		}

		if (isset($this->_methods[$search])) {
			
			$t = $m . ucfirst($search);
			
			if ($m == 'get' && $t == $method) {

				return $this->_variables[$search];

			} elseif ($m != 'get') {

				$this->$method = $args[0];

				return $this;
			}
		}
	}

	public function __set($name, $value)
	{
		if ( ! is_numeric($value) || ($value <= $this->_methods[$name][0])) {
			$value = $this->_methods[$name][0];
		} elseif($value > $this->_methods[$name][1]) {
			$value = $this->_methods[$name][1];
		}

		$this->_variables[$name] = $value;
	}

	public function get()
	{
		return $this->_variables;
	}
}