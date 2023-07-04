<?php
namespace AbdallahZaghloul\DesignPatterns\Creational\StaticFactory;

class CarStaticFactory
{
    /**
     * @param string $type
     * @return ICar|null
     */
    public static function build(string $type): ?ICar
    {
        switch ($type){
            case 'BMW':
                $car = new BMWCar();
                break;
            case 'Benz':
                $car = new BenzCar();
                break;
            default:
                $car = null;
        }

        return $car;
    }
}