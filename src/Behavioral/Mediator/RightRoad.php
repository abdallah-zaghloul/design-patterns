<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\Mediator;

/**
 *
 */
class RightRoad extends Road
{
    /**
     *
     */
    public const ID = 'Right';

    /**
     * @return string
     */
    public function getId(): string
    {
        return self::ID;
    }
}