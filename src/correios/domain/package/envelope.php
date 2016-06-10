<?php

namespace correios\domain\package;

class Envelope extends Package{

	private $_methods = array(

							'lenght'=>array(16,60),

							'width'=>array(11,60),

							);

	public function __construct(){

		parent::__construct($this->_methods);
		
	}

	public function add(){

		$args = func_get_args();
	
		if(count($this->_methods) != count($args))

			die('Error of parameter!');

		$i = 0;

		foreach ($this->_methods as $action=>$min) {

			$this->$action($args[$i]);
			
			$i++;
		}
	
		return $this;
	}
}