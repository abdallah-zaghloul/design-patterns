<?php

namespace AbdallahZaghloul\DesignPatterns\Tests;

use AbdallahZaghloul\DesignPatterns\Creational\SimpleFactory\Car;
use AbdallahZaghloul\DesignPatterns\Creational\SimpleFactory\CarSimpleFactory;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
    public function testCanCreateCar()
    {
        $factory = new CarSimpleFactory();
        $BMWCar = $factory->createCar('BMW');
        $this->assertInstanceOf(Car::class, $BMWCar);
    }

}