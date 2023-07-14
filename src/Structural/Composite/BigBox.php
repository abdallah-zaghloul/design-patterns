<?php

namespace AbdallahZaghloul\DesignPatterns\Structural\Composite;

class BigBox implements IProduct, IActions
{
    /**
     * @var IProduct[]
     */
    private array $products;


    /**
     * @param array $products
     */
    public function __construct(array $products)
    {
        $this->products = $products;
    }


    /**
     * @return float
     */
    public function getPrice(): float
    {
        $totalPrice = 0.0;
        foreach ($this->products as $product){
            $totalPrice += $product->getPrice();
        }
        return $totalPrice;
    }

    /**
     * @return IProduct[]
     */
    public function getProducts(): array
    {
        return $this->products;
    }


    /**
     * @param IProduct $product
     * @return void
     */
    public function add(IProduct $product): void
    {
        $this->products[] = $product;
    }

    /**
     * @param IProduct $product
     * @return void
     */
    public function remove(IProduct $product): void
    {
        $index = array_search($product, $this->products);
        if ($index) unset($this->products[$index]);
    }
}