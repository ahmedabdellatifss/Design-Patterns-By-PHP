<?php

    namespace Creational\SimpleFactory;
    use Creational\SimpleFactory\Car;
    class CarFactory 
    {
        public function createCar(string $type)
        {
            return new Car($type);
        }
    }