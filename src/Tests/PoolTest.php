<?php

namespace AbdallahZaghloul\DesignPatterns\Tests;

use AbdallahZaghloul\DesignPatterns\Creational\Pool\Car;
use AbdallahZaghloul\DesignPatterns\Creational\Pool\CarPool;
use PHPUnit\Framework\TestCase;

class PoolTest extends TestCase
{

    protected function setUp()
    {
        parent::setUp();
        $this->carPool = new CarPool();
    }

    public function testCanRentCar()
    {
        $car = $this->carPool->rentCar();
        $this->assertInstanceOf(Car::class, $car, "it isn't a car");
        $this->assertEquals(1, $this->carPool->getReport());
    }

    public function testCanFreeCar()
    {
        // case empty freeCars[] ... will instantiate a (new Car()) and add it to rentedCars[]
        $car = $this->carPool->rentCar();

        // case not empty freeCars[] ... will remove a car from freeCars[] and add it to rentedCars[]
        $this->carPool->rentCar();

        $this->assertEquals(0, $this->carPool->getFreeCarsCount());

        // remove car from rentedCars[] and add it to freeCars[]
        $this->carPool->freeCar($car);

        $this->assertEquals(2, $this->carPool->getReport());
        $this->assertEquals(1, $this->carPool->getFreeCarsCount());
    }
}