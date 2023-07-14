<?php

namespace AbdallahZaghloul\DesignPatterns\Structural\Bridge;

class Red implements IColor
{
    /**
     * @return string
     */
    public function getColor(): string
    {
        return 'red';
    }
}