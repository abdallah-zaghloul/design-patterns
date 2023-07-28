<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\State;

/**
 *
 */
abstract class State
{
    /**
     * @var string
     */
    protected string $value;
    /**
     * @var Order
     */
    private Order $order;

    /**
     * @return mixed
     */
    abstract public function proceed();

    /**
     * @param Order $order
     * @return void
     */
    public function setOrder(Order $order)
    {
        $this->order = $order;
        $this->log();
    }

    /**
     * @param State $state
     * @return void
     */
    public function changeState(State $state)
    {
        $this->getOrder()->setState($state);
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @return void
     */
    public function log()
    {
        $this->getOrder()->addLog($this->value);
    }

    /**
     * @return Order
     */
    public function getOrder(): Order
    {
        return $this->order;
    }

}