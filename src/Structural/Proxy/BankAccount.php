<?php
namespace AbdallahZaghloul\DesignPatterns\Structural\Proxy;

class BankAccount implements IBankAccount
{
    /**
     * @var array
     */
    private array $transactions = [];

    /**
     * @param float $amount
     * @return float
     */
    public function deposit(float $amount): float
    {
        $this->transactions[] += $amount;
        return $this->getBalance();
    }

    /**
     * @param float $amount
     * @return float
     */
    public function withdraw(float $amount): float
    {
        if ($this->getBalance() > $amount){
            $this->transactions[] -= $amount;
            return $this->getBalance();
        }else {
            throw new \Error("insufficient balance");
        }
    }

    /**
     * @return float
     */
    public function getBalance(): float
    {
        return array_sum($this->transactions);
    }
}