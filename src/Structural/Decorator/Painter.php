<?php

namespace AbdallahZaghloul\DesignPatterns\Structural\Decorator;

class Painter implements IPainter
{
    public const COLOR = null;

    /**
     * @param Car $car
     * @return Car
     */
    public function paintCar(Car $car): Car
    {
        $car->setColor(self::COLOR);
        return $car;
    }
}