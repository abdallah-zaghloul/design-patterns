<?php

namespace AbdallahZaghloul\DesignPatterns\Structural\Bridge;

abstract class Car
{
    /**
     * @var string
     */
    private string $model;

    /**
     * @var IColor
     */
    private IColor $color;


    /**
     * @param IColor $color
     */
    public function __construct(IColor $color)
    {
        $this->model = $this->getModel();
        $this->color = $color;
    }


    /**
     * @return string
     */
    abstract public function getDescription(): string;

    /**
     * @return string
     */
    abstract public function getModel(): string;

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color->getColor();
    }
}