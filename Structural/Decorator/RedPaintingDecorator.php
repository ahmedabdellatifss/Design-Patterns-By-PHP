<?php


namespace Structural\Decorator;


class RedPaintingDecorator extends PaintingDecorator
{
    private const COLOR = '-red-';

    public function paint(Car $car)
    {
        $car->setColor(self::COLOR);
        return parent::paint($car);
    }
}