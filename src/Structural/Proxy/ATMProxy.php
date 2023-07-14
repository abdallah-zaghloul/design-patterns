<?php
namespace AbdallahZaghloul\DesignPatterns\Structural\Proxy;

class ATMProxy extends BankAccount implements IBankAccount
{
    /**
     * @var float|null
     */
    private ?float $cachedBalance = null;

    /**
     * @return float
     */
    public function getBalance(): float
    {
        return $this->cachedBalance ?: parent::getBalance();
    }
}