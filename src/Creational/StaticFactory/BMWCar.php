<?php
namespace AbdallahZaghloul\DesignPatterns\Creational\StaticFactory;

class BMWCar implements ICar
{
    /**
     * @return string
     */
    public function model(): string
    {
        return 'BMW';
    }
}