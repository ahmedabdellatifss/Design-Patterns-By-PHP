<?php

    namespace Tests;

use PHPUnit\Framework\TestCase;
use Structural\Facade\ConverterFacade;
use Structural\Facade\ConverterLib\Photo;

    class FacadeTest extends TestCase
    {
        private $facade;

        protected function setup () :void
        {
            $this->facade = new ConverterFacade();
        }

        public function testCanConvertToGIF()
        {
            $photo = new Photo();
            $this->facade->GIFConvert($photo);

            $this->assertEquals('-web--GIF-animate',$photo->getType());
        }


        public function testCanConvertToJPG()
        {
            $photo = new Photo();
            $this->facade->PNGConvert($photo);

            $this->assertEquals('-web-color_correction-PNG',$photo->getType());
        }
    }