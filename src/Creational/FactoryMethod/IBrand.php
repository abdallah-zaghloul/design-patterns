<?php
namespace AbdallahZaghloul\DesignPatterns\Creational\FactoryMethod;

interface IBrand
{
    /**
     * @return string
     */
    public function createBrand(): string;
}