<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\State;

/**
 *
 */
class PreparedState extends State
{
    /**
     * @var string
     */
    protected string $value = StateEnum::PREPARED;

    /**
     * @return void
     */
    public function proceed()
    {
        $this->changeState(new DeliveredState());
    }
}