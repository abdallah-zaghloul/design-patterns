<?php

namespace AbdallahZaghloul\DesignPatterns\Tests;

use AbdallahZaghloul\DesignPatterns\Creational\StaticFactory\BenzCar;
use AbdallahZaghloul\DesignPatterns\Creational\StaticFactory\BMWCar;
use AbdallahZaghloul\DesignPatterns\Creational\StaticFactory\CarStaticFactory;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{
    public function testCanCreateBMWCar()
    {
        $BMWCar = CarStaticFactory::build('BMW');
        $this->assertInstanceOf(BMWCar::class, $BMWCar);
    }

    public function testCanCreateBenzCar()
    {
        $BenzCar = CarStaticFactory::build('Benz');
        $this->assertInstanceOf(BenzCar::class, $BenzCar);
    }


}