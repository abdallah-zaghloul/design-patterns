<?php

namespace AbdallahZaghloul\DesignPatterns\Creational\Builder;

abstract class Car
{
    /**
     * @var array
     */
    private array $data;

    /**
     * @param $name
     * @param $value
     * @return void
     */
    public function setPart($name, $value)
    {
        $this->data[$name] = $value;
    }
}