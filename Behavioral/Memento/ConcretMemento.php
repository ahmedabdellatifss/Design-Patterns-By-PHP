<?php

    namespace Behavioral\Memento;

    class ConcretMemento implements MementoInterface
    {
        private CodeFile $codefile;

        public function __construct(CodeFile $codefile)
        {
            $this->codefile = $codefile;

        }

        public function getSnapshot()
        {
            return $this->codefile;
        }
    }