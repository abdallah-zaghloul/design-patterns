<?php
namespace AbdallahZaghloul\DesignPatterns\Structural\Adapter;

interface IEngine
{
    /**
     * @return string
     */
    public function startEngine(): string;
}