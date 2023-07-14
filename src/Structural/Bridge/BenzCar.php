<?php

namespace AbdallahZaghloul\DesignPatterns\Structural\Bridge;

class BenzCar extends Car
{
    /**
     * @param IColor $color
     */
    public function __construct(IColor $color)
    {
        parent::__construct($color);
    }


    /**
     * @return string
     */
    public function getDescription(): string
    {
        return sprintf("car is %s and color is %s",$this->getModel(),$this->getColor());
    }


    /**
     * @return string
     */
    public function getModel(): string
    {
        return 'Benz';
    }
}