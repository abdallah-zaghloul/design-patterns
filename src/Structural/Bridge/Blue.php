<?php

namespace AbdallahZaghloul\DesignPatterns\Structural\Bridge;

class Blue implements IColor
{
    /**
     * @return string
     */
    public function getColor(): string
    {
        return 'blue';
    }
}