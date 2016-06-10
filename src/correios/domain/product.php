<?php

namespace correios\domain;

class Product{
	
	use \correios\utils\Dimension{__construct as __constructM;}

	private $_methods = array(
						'weight'=> array(0,105),
						'length'=>array(0,105),
						'diameter'=>array(0,105),
						'width'=>array(0,105),
						'height'=>array(0,105),
						'package'=>array(0,105)
						);


	public function __construct(){

		$this->__constructM($this->_methods);

	}

	public function add(){
		
		$args = func_get_args();

		if(count($this->_methods) != count($args))

			die('Error of parameter!');

		$i = 0;

		foreach ($this->_methods as $action=>$min) {
			

			if($i == 5){

				if(!in_array($args[$i],array(1,2,3)))

					$args[$i] = 0;

			}
				
			$this->$action($args[$i]);
			
			$i++;
		}	

		return $this;
	}

	
}