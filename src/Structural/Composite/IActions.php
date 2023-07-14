<?php

namespace AbdallahZaghloul\DesignPatterns\Structural\Composite;

interface IActions
{
    /**
     * @param IProduct $product
     * @return void
     */
    public function add(IProduct $product): void;

    /**
     * @param IProduct $product
     * @return void
     */
    public function remove(IProduct $product): void;
}