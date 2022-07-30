<?php

    namespace Structural\Facade\ConverterLib;

    class PNGConvert
    {
        public function convertToPNG(Photo $photo)
        {
            $photo->setType($photo . '-PNG');
            return $photo;
        }
    }