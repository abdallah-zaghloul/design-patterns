<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\Observer;

use SplSubject;
use SplObserver;

/**
 *
 */
class Kitchen implements SplObserver
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
        $this->state = sprintf("Kitchen is ready for order %s", $subject->getOrderNumber());
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }
}