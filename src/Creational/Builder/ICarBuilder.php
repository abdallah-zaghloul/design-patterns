<?php

namespace AbdallahZaghloul\DesignPatterns\Creational\Builder;

interface ICarBuilder
{
    /**
     * @return mixed
     */
    public function createCar(): void;

    /**
     * @return void
     */
    public function addEngine(): void;

    /**
     * @return void
     */
    public function addBody(): void;

    /**
     * @return void
     */
    public function addDoors(): void;

    /**
     * @return void
     */
    public function addWheels(): void;

    /**
     * @return Car
     */
    public function getCar(): Car;
}