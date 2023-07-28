<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\State;

/**
 *
 */
class User
{
    /**
     * @var string
     */
    private string $name;
    /**
     * @var string
     */
    private string $address;
    /**
     * @var bool
     */
    private bool $hasPayedOrder;

    /**
     * @param string $name
     * @param string $address
     * @param bool $hasPayedOrder
     */
    public function __construct(string $name, string $address, bool $hasPayedOrder)
    {
        $this->name = $name;
        $this->address = $address;
        $this->hasPayedOrder = $hasPayedOrder;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return bool
     */
    public function hasPayedOrder(): bool
    {
        return $this->hasPayedOrder;
    }
}