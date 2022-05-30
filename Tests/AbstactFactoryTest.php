<?php
namespace Tests;

use Creational\AbstractFactory\BMWCar;
use Creational\AbstractFactory\BenzCar;
use Creational\AbstractFactory\CarAbstractFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testCanCreateBMWCar()
    {
        $carFactory = new CarAbstractFactory(200000);
        $myCar = $carFactory->createBMWCar();

        $this->assertInstanceOf(BMWCar::class , $myCar);
    }
    public function testCanCreateBenzCar()
    {
        $carFactory = new CarAbstractFactory(200000);
        $myCar = $carFactory->createBenzCar();

        $this->assertInstanceOf(BenzCar::class , $myCar);
    }
}