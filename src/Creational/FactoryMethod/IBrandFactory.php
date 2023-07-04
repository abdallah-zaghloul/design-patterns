<?php

namespace AbdallahZaghloul\DesignPatterns\Creational\FactoryMethod;

interface IBrandFactory
{
    /**
     * @return IBrand
     */
    public function buildBrand() : IBrand;
}