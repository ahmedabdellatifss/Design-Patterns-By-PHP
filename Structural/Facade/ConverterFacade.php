<?php

    namespace Structural\Facade;

use Structural\Facade\ConverterLib\ColorCorrection;
use Structural\Facade\ConverterLib\GIFConverter;
use Structural\Facade\ConverterLib\PNGConvert;
use Structural\Facade\ConverterLib\Animator;
use Structural\Facade\ConverterLib\Photo;

    class ConverterFacade 
    {
        public function GIFConvert(Photo $photo)
        {
            $animator = new Animator();
            $gifConverter = new GIFConverter($animator);

            return $gifConverter->ConvertToGIF($photo);
        }

        public function PNGConvert(Photo $photo)
        {
            $colorCorrection = new ColorCorrection();
            $photo->setType($colorCorrection->CorrectColor($photo));
            $PNG_Converter = new PNGConvert();

            return $PNG_Converter->convertToPNG($photo);
        }

    }