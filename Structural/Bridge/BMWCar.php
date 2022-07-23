<?php

    namespace Structural\Bridge;

use ParentIterator;

    class BMWCar extends Car
    {
        public function __construct(carColor $carColor)
        {
            Parent::__construct($carColor);
        }

        public function getProduct()
        {
            return sprintf('the car type is %s and the care color is %s','BMW',$this->carColor->getColor());
        }

    }