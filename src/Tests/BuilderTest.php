<?php

namespace AbdallahZaghloul\DesignPatterns\Tests;
use AbdallahZaghloul\DesignPatterns\Creational\Builder\BenzCar;
use AbdallahZaghloul\DesignPatterns\Creational\Builder\BenzCarBuilder;
use AbdallahZaghloul\DesignPatterns\Creational\Builder\BMWCar;
use AbdallahZaghloul\DesignPatterns\Creational\Builder\BMWCarBuilder;
use AbdallahZaghloul\DesignPatterns\Creational\Builder\CarProducer;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public function testProduceBMWCar()
    {
        $carBuilder = new BMWCarBuilder();
        $car = (new CarProducer($carBuilder))->produce();
        $this->assertInstanceOf(BMWCar::class,$car);
    }

     public function testProduceBenzCar()
     {
         $carBuilder = new BenzCarBuilder();
         $car = (new CarProducer($carBuilder))->produce();
         $this->assertInstanceOf(BenzCar::class,$car);
     }
}