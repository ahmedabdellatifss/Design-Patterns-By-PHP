<?php

    namespace Structural\Bridge;

    abstract class Car
    {
        protected $carColor;

        public function __construct(CarColor $carColor)
        {
            $this->carColor = $carColor;
        }
        abstract function getProduct();
    }