<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\Command;

/**
 *
 */
class GitReceiver
{
    /**
     * @var array
     */
    private array $logs = [];
    /**
     * @var array
     */
    private array $actions = [];

    /**
     * @return string
     */
    public function add(): string
    {
        return $this->log('git add');
    }

    /**
     * @return string
     */
    public function commit(): string
    {
        return $this->log('git commit');
    }

    /**
     * @return string
     */
    public function push(): string
    {
        return $this->log('git push');
    }


    /**
     * @param array|null $actions
     * @return string
     */
    public function revert(?array $actions = null): string
    {
        $actions ??= $this->getActions();
        $reverts = [];
        foreach ($actions as $action){
            $reverts[] = $this->log("git revert ($action)");
        }
        return implode("\n",$reverts);
    }


    /**
     * @param string $command
     * @return string
     */
    private function log(string $command): string
    {
        $log = "$command ".timestamp();
        $this->actions[] = $command;
        $this->logs[] = $log;
        return $log;
    }

    /**
     * @return array
     */
    public function getLogs(): array
    {
        return $this->logs;
    }

    /**
     * @param array $logs
     */
    public function setLogs(array $logs): void
    {
        $this->logs = $logs;
    }


    /**
     * @return array
     */
    public function getActions(): array
    {
        return $this->actions;
    }

    /**
     * @param array $actions
     */
    public function setActions(array $actions): void
    {
        $this->actions = $actions;
    }
}