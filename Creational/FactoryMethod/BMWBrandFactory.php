<?php 
    namespace Creational\FactoryMethod;

    class BMWBrandFactory implements BrandFactory
    {
        public function BuildBrand()
        {
            return new BMWBrand();
        }
    }