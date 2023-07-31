<?php

namespace AbdallahZaghloul\DesignPatterns\Structural\Flyweight;


class ItemDiscount extends Discount
{
    /**
     * @var array|float[]
     */
    private array $itemDiscounts = [
      1 => 0.10,
      2 => 0.20,
      3 => 0.30,
      4 => 0.40,
      5 => 0.50,
      6 => 0.60,
      7 => 0.70,
    ];

    /**
     * @return array|float[]
     */
    public function getItemDiscounts(): array
    {
        return $this->itemDiscounts;
    }

    /**
     * @param int|null $itemId
     * @return float
     */
    public function getItemDiscount(?int $itemId): float
    {
        return null_catch($this->getItemDiscounts(), $itemId, 0.0);
    }

    /**
     * @param string $day
     * @param int|null $itemId
     * @return float
     */
    public function calculateDiscount(string $day, ?int $itemId = null): float
    {
        return $this->getDayDiscount($day) + $this->getItemDiscount($itemId);
    }
}