<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\State;

/**
 *
 */
class PaidState extends State
{
    /**
     * @var string
     */
    protected string $value = StateEnum::PAID;

    /**
     * @return void
     */
    public function proceed()
    {
        $hasPayed = $this->getOrder()->getClient()->hasPayedOrder();
        $hasPayed ? $this->changeState(new DoneState()) : $this->changeState(new CancelledState());
    }
}