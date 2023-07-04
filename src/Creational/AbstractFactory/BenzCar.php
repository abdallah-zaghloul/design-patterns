<?php
namespace AbdallahZaghloul\DesignPatterns\Creational\AbstractFactory;

class BenzCar implements ICar
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
    public function __construct(int $price, ?int $tax)
    {
        $this->price = $price;
        $this->tax = $tax;
    }

    /**
     * @return int
     */
    public function calculatePrice(): int
    {
        return $this->price + $this->tax;
    }
}