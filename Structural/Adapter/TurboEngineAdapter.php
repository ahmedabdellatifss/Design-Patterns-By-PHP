<?php 
    namespace Structural\Adapter;

    class TurboEngineAdapter implements NormalInterface
    {
        private $engine;

        public function __construct(TurboEngine $engine)
        {
            $this->engine = $engine;
        }

        public function startEngine()
        {
            return $this->engine->startTurbo();
        }
    }