<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\Observer;

use SplSubject;
use SplObserver;

/**
 *
 */
class Cashier implements SplObserver
{

    /**
     * @var string
     */
    private string $state;

    /**
     * @inheritDoc
     * @var Restaurant $subject
     */
    public function update(SplSubject $subject)
    {
        $this->state = sprintf("Cashier is ready for order %s", $subject->getOrderNumber());
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }
}