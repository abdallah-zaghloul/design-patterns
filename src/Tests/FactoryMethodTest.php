<?php

namespace AbdallahZaghloul\DesignPatterns\Tests;
use AbdallahZaghloul\DesignPatterns\Creational\FactoryMethod\BenzBrand;
use AbdallahZaghloul\DesignPatterns\Creational\FactoryMethod\BenzBrandFactory;
use AbdallahZaghloul\DesignPatterns\Creational\FactoryMethod\BMWBrand;
use AbdallahZaghloul\DesignPatterns\Creational\FactoryMethod\BMWBrandFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCreateBMWBrand()
    {
        $brand = (new BMWBrandFactory())->buildBrand();
        $this->assertInstanceOf(BMWBrand::class,$brand,"it isn't BMW Brand");

    }

     public function testCreateBenzBrand()
     {
         $brand = (new BenzBrandFactory())->buildBrand();
         $this->assertInstanceOf(BenzBrand::class,$brand,"it isn't Benz Brand");
     }
}