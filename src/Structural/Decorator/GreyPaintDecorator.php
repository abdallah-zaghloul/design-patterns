<?php

namespace AbdallahZaghloul\DesignPatterns\Structural\Decorator;

class GreyPaintDecorator extends PainterDecorator
{
    public const COLOR = 'Grey';

    /**
     * @param Car $car
     * @return Car
     */
    public function paintCar(Car $car): Car
    {
        $car->setColor(self::COLOR);
        return parent::paintCar($car); // TODO: Change the autogenerated stub
    }

}