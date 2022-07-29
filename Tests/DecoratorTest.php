<?php 

namespace Tests;

use PHPUnit\Framework\TestCase;
use Structural\Decorator\BlackPaintingDecorator;
use Structural\Decorator\BluePaintingDecorator;
use Structural\Decorator\Painting;
use Structural\Decorator\Car;
use Structural\Decorator\RedPaintingDecorator;

class DecoratorTest extends TestCase
{
    public function testCanPaintCarWithBlackAndBlueColors()
    {
        $car = new Car();
        $painting = new Painting();
        $painting = new BlackPaintingDecorator($painting);
        $painting = new BluePaintingDecorator($painting);
        $painting->paint($car);

        $this->assertEquals('-blue--black-',$car->getColor());

    }
    public function testCanPaintCarWithRedAndBlueColors(): void
    {
        $car = new Car();
        $painting = new Painting();
        $painting = new BluePaintingDecorator($painting);
        $painting = new RedPaintingDecorator($painting);

        $painting->paint($car);

        $this->assertEquals('-red--blue-',$car->getColor());
    }
}