<?php

    namespace Behavioral\Iterator;

    class City
    {
        private string $name;
        private int $area;

        public function __construct(string $name , int $area)
        {
            $this->name = $name;
            $this->area = $area;
        }


        public function getName():string
        {
            return $this->name;
        }

        public function getArea():string
        {
            return $this->area;
        }
    }