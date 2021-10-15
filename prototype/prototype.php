<?php

class CocaCola {
    
    private $fizzy;
    private $healthy;
    private $tasty;
 
    /**
     * init a CocaCola drink
     */
    public function __construct() {
        $this->fizzy   = true;
        $this->healthy = false;
        $this->tasty   = true;
    }


    public function getFizzy() {
        return  $this->fizzy;   
    }


    public function setFizzy($a) {
        $this->fizzy = $a;   
    }

    /**
     * This magic method is required, even if empty as part of the prototype pattern
     */
    public function __clone() {
        //empty
    }
 
}
 
$cola = new CocaCola();
 

var_dump($cola);
 
$cola_zero = clone $cola;

$cola_meshki = clone $cola;
 

var_dump($cola_zero);

var_dump($cola_meshki);

$cola_zero->setFizzy(0);

echo $cola_zero->getFizzy();