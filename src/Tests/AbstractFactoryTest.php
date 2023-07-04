<?php

namespace AbdallahZaghloul\DesignPatterns\Tests;
use AbdallahZaghloul\DesignPatterns\Creational\AbstractFactory\CarAbstractFactory;
use AbdallahZaghloul\DesignPatterns\Creational\AbstractFactory\BMWCar;
use AbdallahZaghloul\DesignPatterns\Creational\AbstractFactory\BenzCar;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testCreateBMWCar()
    {
        $car = (new CarAbstractFactory(500000))->createBMWCar();
        $this->assertInstanceOf(BMWCar::class,$car,"it isn't a BMW Car");
    }

     public function testCreateMercedesCar()
     {
        $car = (new CarAbstractFactory(200000,10000))->createMercedesCar();
        $this->assertInstanceOf(BenzCar::class,$car,"it isn't a Mercedes Car");
     }
}