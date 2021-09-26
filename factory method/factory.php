<?php

    interface shape{
        public function getArea();
    }

    class square implements shape{
        private $width;
        public function __construct($width){
            $this->width = $width;
        }
        public function getArea(){
            return $this->width ** 2;
        }
    }

    class circle implements shape{
        private $radius;
        private $color;
        public function __construct($radius , $color){
            $this->radius = $radius;
            $this->color = $color;
        }
        public function getArea(){
            echo "hi im a circle . my color is : ".$this->color."\n";
            return ($this->radius ** 2 ) * 3.14;
        }

    }


    abstract class ShapeFactory{
        abstract function getShape();
    }


    class circleFactory extends ShapeFactory{
        private $radius;
        public function __construct($radius){
            $this->radius = $radius;
            
        }
        public function getShape(){
            return new circle($this->radius , "blue");
        }
    }


    class squareFactory extends ShapeFactory{
        private $width;
        public function __construct($width){
            $this->width = $width;
        }
        public function getShape(){
            return new square($this->width);
        }
    }



    function creator(ShapeFactory $shapeFactory){
       return $shapeFactory->getShape();
    }


    
    $dayere = creator(new circleFactory(2));
    echo $dayere->getArea();





?>