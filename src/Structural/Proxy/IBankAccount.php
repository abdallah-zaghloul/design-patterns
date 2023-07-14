<?php
namespace AbdallahZaghloul\DesignPatterns\Structural\Proxy;

/**
 *
 */
interface IBankAccount
{
    /**
     * @param float $amount
     * @return float
     */
    public function deposit(float $amount): float;

    /**
     * @param float $amount
     * @return float
     */
    public function withdraw(float $amount): float;

    /**
     * @return float
     */
    public function getBalance(): float;
}