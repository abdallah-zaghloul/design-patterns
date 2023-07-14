<?php

namespace AbdallahZaghloul\DesignPatterns\Tests;

use AbdallahZaghloul\DesignPatterns\Structural\Bridge\BenzCar;
use AbdallahZaghloul\DesignPatterns\Structural\Bridge\Blue;
use AbdallahZaghloul\DesignPatterns\Structural\Bridge\BMWCar;
use AbdallahZaghloul\DesignPatterns\Structural\Bridge\Red;
use PHPUnit\Framework\TestCase;
class BridgeTest extends TestCase
{
    public function testCanCreateBlueBMWCar()
    {
        [$model, $color] = ['BMW',(new Blue())];
        $blueBMWCar = new BMWCar($color);
        $expected = "car is $model and color is {$color->getColor()}";
        $this->assertEquals($expected, $blueBMWCar->getDescription());
    }

    public function testCanCreateRedBMWCar()
    {
        [$model, $color] = ['BMW',(new Red())];
        $redBMWCar = new BMWCar($color);
        $expected = "car is $model and color is {$color->getColor()}";
        $this->assertEquals($expected, $redBMWCar->getDescription());
    }

    public function testCanCreateBlueBenzCar()
    {
        [$model, $color] = ['Benz',(new Blue())];
        $blueBenzCar = new BenzCar($color);
        $expected = "car is $model and color is {$color->getColor()}";
        $this->assertEquals($expected, $blueBenzCar->getDescription());
    }

    public function testCanCreateRedBenzCar()
    {
        [$model, $color] = ['Benz',(new Red())];
        $redBenzCar = new BenzCar($color);
        $expected = "car is $model and color is {$color->getColor()}";
        $this->assertEquals($expected, $redBenzCar->getDescription());
    }
}