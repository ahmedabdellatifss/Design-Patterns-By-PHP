<?php

    namespace Behavioral\Memento;

    class Originator
    {
        private CodeFile $codefile;

        public function __construct()
        {
            $this->codefile = new CodeFile();
        }

        public function addNewEcho()
        {
            $this->codefile->addNewLine("Echo 'TEST New Line ';");
        }

        public function addNewVar()
        {
            $this->codefile->addNewLine('$X = 15;');
        }

        public function save(): MementoInterface
        {
            return new ConcretMemento(clone $this->codefile);
        }

        public function CtrlZ(MementoInterface $memento)
        {
            $this->codefile = $memento->getSnapshot();
        }

        public function getCodeFile(): CodeFile
        {
            return $this->codefile;
        }
    }