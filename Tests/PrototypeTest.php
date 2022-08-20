<?php

namespace Tests;

use Creational\ProtoType\AutomaticCarPrototype;
use Creational\ProtoType\ManualCarProtoType;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase 
{
    public function testCanCreateAutomaicCarWithClone()
    {
        $automaticPrototypeCar = new AutomaticCarPrototype();

        for( $index =1 ; $index <= 10 ; $index ++)
        {
            $newCar = clone $automaticPrototypeCar;
            $this->assertInstanceOf(AutomaticCarProtoType::class , $newCar);

        }
    }
    
    public function testCanCreateManualCarWithClone()
    {
        $manualCarProtoTypePrototypeCar = new ManualCarProtoType();

        for( $index =1 ; $index <= 10 ; $index ++)
        {
            $newCar = clone $manualCarProtoTypePrototypeCar;
            $this->assertInstanceOf(ManualCarProtoType::class , $newCar);

        }
    }

}