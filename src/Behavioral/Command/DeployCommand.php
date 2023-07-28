<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\Command;

/**
 *
 */
class DeployCommand implements ICommand
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
     * @return void
     */
    public function execute()
    {
        $this->gitReceiver->add();
        $this->gitReceiver->commit();
        $this->gitReceiver->push();
    }
}