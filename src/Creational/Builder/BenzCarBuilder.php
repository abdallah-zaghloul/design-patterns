<?php

namespace AbdallahZaghloul\DesignPatterns\Creational\Builder;

class BenzCarBuilder implements ICarBuilder
{
    /**
     * @var BenzCar
     */
    private BenzCar $type;

    /**
     * @return void
     */
    public function createCar(): void
    {
        $this->type = new BenzCar();
    }

    /**
     * @return void
     */
    public function addEngine(): void
    {
        $this->type->setPart('ENGINE','Benz-engine');
    }

    /**
     * @return void
     */
    public function addBody(): void
    {
        $this->type->setPart('BODY','Benz-Body');
    }

    /**
     * @return void
     */
    public function addDoors(): void
    {
        $this->type->setPart('DOORS','Benz-Doors');
    }

    /**
     * @return void
     */
    public function addWheels(): void
    {
        $this->type->setPart('WHEELS','Benz-Wheels');
    }

    /**
     * @return Car
     */
    public function getCar(): Car
    {
        return $this->type;
    }
}