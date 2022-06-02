<?php 
    namespace Creational\FactoryMethod;

    class BENZBrand implements CarBuilderInterface
    {
        public function createBrand()
        {
            return "BENZ Brand ";
        }
    }