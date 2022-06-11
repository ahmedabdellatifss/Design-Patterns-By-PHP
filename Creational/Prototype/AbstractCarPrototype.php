<?php 

    namespace Creational\Prototype;

    abstract class AbstractCarPrototype 
    {
        protected $model;
        private $flag;

        abstract function __clone();

        public function getFlag()
        {
            return $this->flag;
        }

        public function setFlag($flag):void 
        {
            $this->flag = $flag;
        }
        
    }