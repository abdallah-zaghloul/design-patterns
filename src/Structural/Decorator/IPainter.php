<?php

namespace AbdallahZaghloul\DesignPatterns\Structural\Decorator;

interface IPainter
{
    /**
     * @param Car $car
     * @return Car
     */
    public function paintCar(Car $car): Car;
}