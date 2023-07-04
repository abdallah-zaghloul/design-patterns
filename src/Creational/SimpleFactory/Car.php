<?php

namespace AbdallahZaghloul\DesignPatterns\Creational\SimpleFactory;

class Car
{
    /**
     * @var string
     */
    private string $type;

    /**
     * @param $type
     */
    public function __construct($type)
    {
        $this->type = $type;
    }

}