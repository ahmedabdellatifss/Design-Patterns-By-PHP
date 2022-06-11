<?php


namespace Tests;

use Creational\SimpleFactory\CarFactory;
use Creational\SimpleFactory\Car;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase 
{
    public function testCanCreateCar()
    {
        $factory = new CarFactory();
        $BMWCar = $factory->createCar('BMW');

        $this->assertInstanceOf(Car::class , $BMWCar);
    }
}