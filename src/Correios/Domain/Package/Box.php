<?php

namespace Correios\Domain\Package;

class Box extends Package
{
    const MAX = 200;

    private $_methods = [
        'lenght' => [16,105],
        'width' => [11,105],
        'height' => [2,105]
    ];

    public function __construct()
    {
        parent::__construct($this->_methods);
    }

    public function add()
    {
        $args = func_get_args();
        $soma = 0;

        if (count($this->_methods) != count($args)) {
            throw new \Exception('Error of parameter!', 1);
        }

        $i = 0;

        foreach ($this->_methods as $action => $min) {

            $soma += $args[$i];

            $this->$action($args[$i]);
            
            $i++;
        }

        if ($soma > self::MAX) {
            return false;
        }
                
        return $this;
    }
}