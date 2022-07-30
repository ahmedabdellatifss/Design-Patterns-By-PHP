<?php

    namespace Structural\Facade\ConverterLib;

    use Structural\Facade\ConverterLib\Animator;

    class GIFConverter 
    {
        private $animate;

        public function __construct(Animator $animator)
        {
            $this->animate = $animator;
        }

        public function ConvertToGIF(Photo $photo)
        {
            $type = $photo->getType().'-GIF';
            $photo->setType($type);
            $photo->setType($this->animate->animatePhoto($photo));
            return $photo;
        }

        
    }