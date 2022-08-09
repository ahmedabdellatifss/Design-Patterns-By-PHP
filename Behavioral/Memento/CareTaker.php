<?php

    namespace Behavioral\Memento;

    class CareTaker
    {
        private Originator $originator;
        private $mementos = [];
        public function __construct(Originator $originator)
        {
            $this->originator = $originator;
        }

        public function commit()
        {
            $this->mementos[] = $this->originator->save();
        }

        public function rollBack()
        {
            $mementos = array_pop($this->mementos);
            $this->originator->CtrlZ($mementos);
            
        }
    }