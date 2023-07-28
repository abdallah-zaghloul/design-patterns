<?php

namespace AbdallahZaghloul\DesignPatterns\Tests;
use AbdallahZaghloul\DesignPatterns\Behavioral\State\Order;
use AbdallahZaghloul\DesignPatterns\Behavioral\State\StateEnum;
use AbdallahZaghloul\DesignPatterns\Behavioral\State\User;
use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{
    public function testOrderCanBeCreated()
    {
        $user = new User('Zaghloul','Sydney',true);
        $order = new Order($user);
        $this->assertEquals(StateEnum::CREATED, $order->getState()->getValue());
    }

    public function testOrderCanBeDone()
    {
        $user = new User('Zaghloul','Sydney',true);
        $order = new Order($user);

        $order->proceed();
        $order->proceed();
        $order->proceed();
        $order->proceed();

        $this->assertEquals(StateEnum::DONE, $order->getState()->getValue());
    }

    public function testOrderCanBeCancelled()
    {
        $user = new User('Zaghloul','Sydney',false);
        $order = new Order($user);

        $order->proceed();
        $order->proceed();
        $order->proceed();
        $order->proceed();

        $this->assertEquals(StateEnum::CANCELLED, $order->getState()->getValue());
    }

}