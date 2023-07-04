<?php
namespace AbdallahZaghloul\DesignPatterns\Creational\Pool;
use JetBrains\PhpStorm\ArrayShape;

class CarPool
{
    /**
     * @var Car[]
     */
    private array $freeCars = [];

    /**
     * @var Car[]
     */
    private array $rentedCars = [];

    /**
     * @return Car
     */
    public function rentCar(): Car
    {
        $car = empty($this->freeCars) ? (new Car()) : array_pop($this->freeCars);
        $this->rentedCars[$car->getId()] = $car;
        return $car;
    }

    /**
     * @param Car $car
     * @return void
     */
    public function freeCar(Car $car)
    {
        $carId = $car->getId();
        if (isset($this->rentedCars[$carId])){
            unset($this->rentedCars[$carId]);
            $this->freeCars[$carId] = $car;
        }
    }

    /**
     * @return int
     */
    public function getReport(): int
    {
        return $this->getFreeCarsCount() + $this->getRentedCarsCount();
    }

    /**
     * @return int
     */
    public function getFreeCarsCount(): int
    {
        return count($this->freeCars);
    }

    /**
     * @return int
     */
    public function getRentedCarsCount(): int
    {
        return count($this->rentedCars);
    }
}