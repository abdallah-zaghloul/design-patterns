<?php

namespace AbdallahZaghloul\DesignPatterns\Creational\FactoryMethod;

class BenzBrandFactory implements IBrandFactory
{
    /**
     * @return IBrand
     */
    public function buildBrand(): IBrand
    {
        return new BenzBrand();
    }
}