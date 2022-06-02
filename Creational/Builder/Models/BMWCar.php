<?php 
    namespace Creational\Builder\Models;
    use Creational\Builder\Models\Car;
    
    class BMWCar extends Car {
        private $data =[];
        public function setPart($name , $value)
        {
            $this->data[$name] = $value;
        }
    }