<?php

namespace correios\requirements;

class CurlLib implements LibInterface {
	
	public function installed(){
		
		if(!extension_loaded('curl'))

			return false;

		return true;
	
	}

}