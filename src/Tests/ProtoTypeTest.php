<?php

namespace AbdallahZaghloul\DesignPatterns\Tests;

use AbdallahZaghloul\DesignPatterns\Creational\ProtoType\AutomaticCarProtoType;
use AbdallahZaghloul\DesignPatterns\Creational\ProtoType\ManualCarProtoType;
use PHPUnit\Framework\TestCase;

class ProtoTypeTest extends TestCase
{
    public function testCanCloneAutomaticCar()
    {
        $automaticCarProtoType = new AutomaticCarProtoType();
        for ($i = 1; $i <= 10; $i++){
            $newCar = clone $automaticCarProtoType;
            $this->assertInstanceOf(AutomaticCarProtoType::class,$newCar);
        }
    }

    public function testCanCloneManualCar()
    {
        $manualCarProtoType = new ManualCarProtoType();
        for ($i = 1; $i <= 10; $i++){
            $newCar = clone $manualCarProtoType;
            $this->assertInstanceOf(ManualCarProtoType::class,$newCar);
        }
    }

}