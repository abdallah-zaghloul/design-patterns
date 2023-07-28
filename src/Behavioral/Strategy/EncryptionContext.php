<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\Strategy;

/**
 *
 */
class EncryptionContext
{
    /**
     * @var Strategy
     */
    private Strategy $strategy;

    /**
     * @param Strategy $strategy
     */
    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * @return Strategy
     */
    public function getStrategy(): Strategy
    {
        return $this->strategy;
    }

    /**
     * @param Strategy $strategy
     */
    public function setStrategy(Strategy $strategy): void
    {
        $this->strategy = $strategy;
    }

    /**
     * @param string $data
     * @return array
     */
    public function encryptString(string $data): array
    {
        return $this->strategy->encrypt($data);
    }

}