<?php

namespace AbdallahZaghloul\DesignPatterns\Creational\FactoryMethod;

class BMWBrand implements IBrand
{
    /**
     * @return string
     */
    public function createBrand(): string
    {
        return "BMW Brand";
    }
}