<?php

namespace AbdallahZaghloul\DesignPatterns\Creational\AbstractFactory;

class CarAbstractFactory
{
    /**
     * @var int
     */
    private int $price;

    /**
     * @var int|null
     */
    private ?int $tax;

    /**
     * @param int $price
     * @param int|null $tax
     */
    public function __construct(int $price, ?int $tax = null)
    {
        $this->price = $price;
        $this->tax = $tax;
    }

    /**
     * @return BMWCar
     */
    public function createBMWCar() : BMWCar
    {
        return new BMWCar($this->price);
    }

    /**
     * @return BenzCar
     */
    public function createMercedesCar() : BenzCar
    {
        return new BenzCar($this->price , $this->tax);
    }

}