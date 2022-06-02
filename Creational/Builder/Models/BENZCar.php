<?php 
    namespace Creational\Builder\Models;
    use Creational\Builder\Models\Car;
    
    class BENZCar extends Car {
        private $data =[];
        public function setPart($name , $value)
        {
            $this->data[$name] = $value;
        }
    }