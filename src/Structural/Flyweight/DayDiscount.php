<?php

namespace AbdallahZaghloul\DesignPatterns\Structural\Flyweight;

class DayDiscount extends Discount
{
    /**
     * @param string $day
     * @param int|null $itemId
     * @return float
     */
    public function calculateDiscount(string $day, ?int $itemId = null): float
    {
        return $this->getDayDiscount($day);
    }
}