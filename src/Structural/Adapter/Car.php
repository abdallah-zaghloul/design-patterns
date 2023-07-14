<?php

namespace AbdallahZaghloul\DesignPatterns\Structural\Adapter;

class Car
{
    /**
     * @var IEngine
     */
    private IEngine $engine;

    /**
     * @param IEngine $engine
     */
    public function __construct(IEngine $engine)
    {
        $this->engine = $engine;
    }

    /**
     * @return string
     */
    public function start(): string
    {
        return $this->engine->startEngine();
    }
}