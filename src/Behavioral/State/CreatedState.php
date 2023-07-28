<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\State;

/**
 *
 */
class CreatedState extends State
{
    /**
     * @var string
     */
    protected string $value = StateEnum::CREATED;

    /**
     * @return void
     */
    public function proceed()
    {
        $this->changeState(new PreparedState());
    }
}