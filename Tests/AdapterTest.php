<?php
namespace Tests;

use Structural\Adapter\Car;
use PHPUnit\Framework\TestCase;
use Structural\Adapter\NormalEngine;
use Structural\Adapter\TurboEngine;
use Structural\Adapter\TurboEngineAdapter;

class AdapterTest extends TestCase
{
    public function testCanStartNormalEngine()
    {
        $engine = new NormalEngine();
        $car = new Car($engine);

        $this->assertEquals('normal engine is start' , $car->start());

    }
    public function testCanStartTurboEngine()
    {
        $engine = new TurboEngine();
        $adpter = new TurboEngineAdapter($engine);
        $car = new Car($adpter);

        $this->assertEquals('Turbo engine is start' , $car->start());

    }
}