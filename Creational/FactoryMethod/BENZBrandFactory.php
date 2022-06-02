<?php 
    namespace Creational\FactoryMethod;

    class BENZBrandFactory implements BrandFactory
    {
        public function BuildBrand()
        {
            return new BENZBrand();
        }
    }