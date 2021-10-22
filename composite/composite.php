<?php
interface Honk {
    public function honk();
}

class Car implements Honk {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function honk() {
        echo "$this->name: honk...\n";
    }
}

class CarList implements Honk {
    public $list = [];

    public function add(Car $car) {
        $this->list[] = $car;
    }
    public function honk() {
        foreach ($this->list as $car) {
            $car->honk();
       }
   }
}

$lambo = new Car("Lambo");
$bmw = new Car("BMW");

$list = new CarList();
$list->add($lambo);
$list->add($bmw);

$list->honk();

?>