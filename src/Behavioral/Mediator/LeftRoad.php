<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\Mediator;

/**
 *
 */
class LeftRoad extends Road
{
    /**
     *
     */
    public const ID = 'Left';

    /**
     * @return string
     */
    public function getId(): string
    {
        return self::ID;
    }
}