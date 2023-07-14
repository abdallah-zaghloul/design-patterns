<?php
namespace AbdallahZaghloul\DesignPatterns\Structural\Adapter;

class ManualEngine implements IEngine
{
    /**
     * @return string
     */
    public function startEngine(): string
    {
        return 'Starting Manual Engine';
    }
}