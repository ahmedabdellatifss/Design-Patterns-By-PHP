<?php

    namespace Behavioral\Memento;

    class CodeFile
    {
        private $lines = [];
        public function __construct()
        {
            $this->lines[] = '<?php>';
        }

        public function addNewLine(string $line)
        {
            $this->lines[] = $line;

        }

        public function getLines(): array
        {
            return $this->lines;
        }
    }