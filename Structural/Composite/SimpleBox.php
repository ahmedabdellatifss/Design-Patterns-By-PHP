<?php 

    namespace Structural\Composite;

    class SimpleBox implements ProductInterface
    {
        private $price;

        public function __construct(int $price)
        {
            $this->price = $price;
        }

        public function getPrice()
        {
            return $this->price;
        }
    }