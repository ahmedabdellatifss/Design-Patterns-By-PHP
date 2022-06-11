<?php

    namespace Creational\SimpleFactory;

    class Car 
    {
        private $type;

        public function __construct(string $type)
        {
            $this->type = $type;
        
        }
    }