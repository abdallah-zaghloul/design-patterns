<?php

namespace AbdallahZaghloul\DesignPatterns\Creational\Builder;

class BMWCarBuilder implements ICarBuilder
{
    /**
     * @var BMWCar
     */
    private BMWCar $type;

    /**
     * @return void
     */
    public function createCar(): void
    {
        $this->type = new BMWCar();
    }

    /**
     * @return void
     */
    public function addEngine(): void
    {
       $this->type->setPart('ENGINE','BMW-engine');
    }

    /**
     * @return void
     */
    public function addBody(): void
    {
        $this->type->setPart('BODY','BMW-Body');
    }

    /**
     * @return void
     */
    public function addDoors(): void
    {
        $this->type->setPart('DOORS','BMW-Doors');
    }

    /**
     * @return void
     */
    public function addWheels(): void
    {
        $this->type->setPart('WHEELS','BMW-Wheels');
    }

    /**
     * @return Car
     */
    public function getCar(): Car
    {
        return $this->type;
    }
}