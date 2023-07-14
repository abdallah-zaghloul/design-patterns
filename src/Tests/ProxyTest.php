<?php

namespace AbdallahZaghloul\DesignPatterns\Tests;

use AbdallahZaghloul\DesignPatterns\Structural\Proxy\ATMProxy;
use PHPUnit\Framework\TestCase;
class ProxyTest extends TestCase
{
    public function testCanDepositFromATMProxy()
    {
        $ATMProxy = new ATMProxy();
        $ATMProxy->deposit(500);
        $ATMProxy->deposit(1000);
        $this->assertEquals(1500, $ATMProxy->getBalance());
    }

    public function testCanWithdrawFromATMProxy()
    {
        $ATMProxy = new ATMProxy();
        $ATMProxy->deposit(500);
        $ATMProxy->deposit(1000);
        $ATMProxy->withdraw(200);
        $this->assertEquals(1300, $ATMProxy->getBalance());
    }

}