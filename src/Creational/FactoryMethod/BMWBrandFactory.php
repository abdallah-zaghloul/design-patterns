<?php

namespace AbdallahZaghloul\DesignPatterns\Creational\FactoryMethod;

class BMWBrandFactory implements IBrandFactory
{
    /**
     * @return IBrand
     */
    public function buildBrand(): IBrand
    {
        return new BMWBrand();
    }
}