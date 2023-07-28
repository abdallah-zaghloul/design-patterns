<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\State;

/**
 *
 */
class DeliveredState extends State
{
    /**
     * @var string
     */
    protected string $value = StateEnum::DELIVERED;

    /**
     * @return void
     */
    public function proceed()
    {
        $this->changeState(new PaidState());
    }
}