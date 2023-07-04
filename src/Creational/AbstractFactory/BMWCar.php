<?php

namespace AbdallahZaghloul\DesignPatterns\Creational\AbstractFactory;

class BMWCar implements ICar
{
    /**
     * @var int
     */
    private int $price;

    /**
     * @param int $price
     */
    public function __construct(int $price)
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function calculatePrice(): int
    {
        return $this->price;
    }
}