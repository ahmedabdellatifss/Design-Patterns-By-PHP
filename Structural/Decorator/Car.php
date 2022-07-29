<?php

    namespace Structural\Decorator;

    class Car 
    {
        private string  $color='';

        public function getColor() :string
        {
            return $this->color;
        }

        public function setColor(string $color):void
        {
            $this->color .= $color;
        }
    }