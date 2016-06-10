<?php

namespace correios\domain\package;

class Box extends Package{

	const MAX = 200;

	private $_methods = array(

							'lenght'=>array(16,105),

							'width'=>array(11,105),
							
							'height'=>array(2,105)

							);

	public function __construct(){

		parent::__construct($this->_methods);

	}

	public function add(){

		$args = func_get_args();

		$soma = 0;

		if(count($this->_methods) != count($args))

			die('Error of parameter!');

		$i = 0;

		foreach ($this->_methods as $action => $min) {

			$soma+=$args[$i];

			$this->$action($args[$i]);
			
			$i++;
		}

		if($soma > self::MAX)

			return false;
				
		return $this;
	}
}