<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\Command;

/**
 *
 */
class RevertDeployCommand implements ICommand
{
    /**
     * @var GitReceiver
     */
    private GitReceiver $gitReceiver;

    /**
     * @param GitReceiver $gitReceiver
     */
    public function __construct(GitReceiver $gitReceiver)
    {
        $this->gitReceiver = $gitReceiver;
    }

    /**
     * @return mixed|void
     */
    public function execute()
    {
        $this->gitReceiver->revert();
    }
}