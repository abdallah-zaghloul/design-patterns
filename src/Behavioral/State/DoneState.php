<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\State;

/**
 *
 */
class DoneState extends State
{
    /**
     * @var string
     */
    protected string $value = StateEnum::DONE;

    /**
     * @return void
     */
    public function proceed()
    {
        $this->changeState($this);
    }
}