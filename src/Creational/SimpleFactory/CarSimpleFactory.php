<?php
namespace AbdallahZaghloul\DesignPatterns\Creational\SimpleFactory;

class CarSimpleFactory
{
    /**
     * @param string $type
     * @return Car
     */
    public function createCar(string $type): Car
    {
        return new Car($type);
    }

}