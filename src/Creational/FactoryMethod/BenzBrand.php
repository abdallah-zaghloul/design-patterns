<?php

namespace AbdallahZaghloul\DesignPatterns\Creational\FactoryMethod;

class BenzBrand implements IBrand
{
    /**
     * @return string
     */
    public function createBrand(): string
    {
        return "Benz Brand";
    }
}