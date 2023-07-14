<?php

namespace AbdallahZaghloul\DesignPatterns\Tests;

use AbdallahZaghloul\DesignPatterns\Structural\Decorator\GreyPaintDecorator;
use AbdallahZaghloul\DesignPatterns\Structural\Decorator\BluePaintDecorator;
use AbdallahZaghloul\DesignPatterns\Structural\Decorator\Car;
use AbdallahZaghloul\DesignPatterns\Structural\Decorator\Painter;
use PHPUnit\Framework\TestCase;
class DecoratorTest extends TestCase
{
    public function testCanPaintCarWithBlueGrey()
    {
        [$car , $painter] = [(new Car()) , (new Painter())];
        $bluePainter = new BluePaintDecorator($painter);
        $bluePainter->paintCar($car);
        $greyPainter = new GreyPaintDecorator($painter);
        $greyPainter->paintCar($car);
        $this->assertEquals("Blue-Grey",$car->getColor());
    }
}