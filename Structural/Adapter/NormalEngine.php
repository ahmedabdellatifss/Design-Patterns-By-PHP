<?php 
    namespace Structural\Adapter;

    class NormalEngine implements NormalInterface
    {
        public function startEngine()
        {
            return "normal engine is start";
        }
    }