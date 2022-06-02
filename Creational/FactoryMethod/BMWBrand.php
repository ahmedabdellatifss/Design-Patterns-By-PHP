<?php 
    namespace Creational\FactoryMethod;

    class BMWBrand implements CarBuilderInterface
    {
        public function createBrand()
        {
            return "BMW Brand ";
        }
    }