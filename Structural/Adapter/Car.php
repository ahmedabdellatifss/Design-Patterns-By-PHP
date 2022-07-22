<?php 
namespace Structural\Adapter;
class Car
{
    private $engine;
    public function __construct(NormalInterface $engine)
    {
        $this->engine = $engine;
    }

    public function start()
    {
        return $this->engine->startEngine();
    }
}