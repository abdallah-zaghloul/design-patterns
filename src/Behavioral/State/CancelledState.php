<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\State;

/**
 *
 */
class CancelledState extends State
{
    /**
     * @var string
     */
    protected string $value = StateEnum::CANCELLED;

    /**
     * @return void
     */
    public function proceed()
    {
        $this->changeState($this);
    }
}