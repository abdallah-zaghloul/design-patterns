<?php
namespace AbdallahZaghloul\DesignPatterns\Creational\StaticFactory;

class BenzCar implements ICar
{
    /**
     * @return string
     */
    public function model(): string
    {
        return 'Benz';
    }
}