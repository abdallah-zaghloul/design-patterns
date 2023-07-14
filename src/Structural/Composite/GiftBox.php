<?php

namespace AbdallahZaghloul\DesignPatterns\Structural\Composite;

class GiftBox implements IGift,IProduct
{
    /**
     * @var float
     */
    private float $price;

    /**
     * @var float
     */
    private float $packagingPrice;

    /**
     * @param float $price
     * @param float $packagingPrice
     */
    public function __construct(float $price, float $packagingPrice)
    {
        $this->price = $price;
        $this->packagingPrice = $packagingPrice;
    }

    public function getPackagingPrice(): float
    {
        return $this->packagingPrice;
    }

    public function getPrice(): float
    {
        return $this->price + $this->getPackagingPrice();
    }
}