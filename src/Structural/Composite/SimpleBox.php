<?php

namespace AbdallahZaghloul\DesignPatterns\Structural\Composite;

class SimpleBox implements IProduct
{

    /**
     * @var float
     */
    private float $price;

    /**
     * @param $price
     */
    public function __construct($price)
    {
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
}