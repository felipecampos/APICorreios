<?php

	define('DS',DIRECTORY_SEPARATOR);

	define('APP_ROOT', __DIR__.DS.'..'.DS.'vendor');

	$autoload = APP_ROOT.DS.'autoload.php';

	if(!file_exists($autoload))
		throw new Exception("Execute o composer install no Command Line!", 1);

	require_once $autoload;
		

