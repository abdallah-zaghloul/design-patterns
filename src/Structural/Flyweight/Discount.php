<?php
namespace AbdallahZaghloul\DesignPatterns\Structural\Flyweight;

abstract class Discount
{
    /**
     * @var array|float[]
     */
    private array $dayDiscounts = [
        'saturday' => 0.10,
        'sunday'=> 0.20,
        'monday'=> 0.30,
        'tuesday'=> 0.40,
        'wednesday'=> 0.50,
        'thursday'=> 0.60,
        'friday'=> 0.70,
    ];

    /**
     * @param string $day
     * @param int|null $itemId
     * @return float
     */
    abstract public function calculateDiscount(string $day, ?int $itemId = null): float;

    /**
     * @return array|float[]
     */
    protected function getDayDiscounts(): array
    {
        return $this->dayDiscounts;
    }

    /**
     * @param string $day
     * @return float
     */
    public function getDayDiscount(string $day): float
    {
        return null_catch($this->getDayDiscounts(), $day, 0.0);
    }

}