<?php
namespace Tests;

use Structural\Bridge\BMWCar;
use Structural\Bridge\BENZCar;
use PHPUnit\Framework\TestCase;
use Structural\Bridge\BlueCar;
use Structural\Bridge\RedCar;

class BridgeTest extends TestCase
{
    public function testCanCreateBlueBmwCar()
    {
        $carColor = new BlueCar();
        $BMWcar = new BMWCar($carColor);

        $this->assertEquals('the car type is BMW and the care color is Blue',$BMWcar->getProduct());

    }
    public function testCanCreateRedBMWCar()
    {
        $carColor = new RedCar();
        $BMWcar = new BMWCar($carColor);

        $this->assertEquals('the car type is BMW and the care color is Red',$BMWcar->getProduct());
    }

    public function testCanCreateBlueBENZCar()
    {
        $carColor = new BlueCar();
        $car = new BENZCar($carColor);

        $this->assertEquals('the car type is BENZ and the care color is Blue',$car->getProduct());
    }

    public function testCanCreateRedBENZCar()
    {
        $carColor = new RedCar();
        $car = new BENZCar($carColor);

        $this->assertEquals('the car type is BENZ and the care color is Red',$car->getProduct());
    }
}