<?php

namespace AbdallahZaghloul\DesignPatterns\Creational\Builder;

class CarProducer
{
    /**
     * @var ICarBuilder
     */
    private ICarBuilder $builder;

    /**
     * @param ICarBuilder $builder
     */
    public function __construct(ICarBuilder $builder)
    {
        $this->builder = $builder;
    }

    /**
     * @return Car
     */
    public function produce(): Car
    {
        $this->builder->createCar();
        $this->builder->addEngine();
        $this->builder->addBody();
        $this->builder->addWheels();
        $this->builder->addDoors();
        return $this->builder->getCar();
    }

}