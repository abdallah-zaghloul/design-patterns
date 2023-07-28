<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\Command;

/**
 *
 */
class CLIInvoker
{
    /**
     * @var ICommand
     */
    private ICommand $command;

    /**
     * @return ICommand
     */
    public function getCommand(): ICommand
    {
        return $this->command;
    }

    /**
     * @param ICommand $command
     */
    public function setCommand(ICommand $command): void
    {
        $this->command = $command;
    }

    /**
     * @return void
     */
    public function run()
    {
        $this->command->execute();
    }
}