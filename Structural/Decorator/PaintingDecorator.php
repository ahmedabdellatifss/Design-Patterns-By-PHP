<?php 

    namespace Structural\Decorator;

    class PaintingDecorator implements PaintingInterface
    {
        private PaintingInterface $painting;

        public function __construct(PaintingInterface $painting)
        {
            $this->painting = $painting;
        }

        public function paint(Car $car)
        {
            return $this->painting->paint($car);
        }
    }