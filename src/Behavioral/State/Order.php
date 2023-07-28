<?php
namespace AbdallahZaghloul\DesignPatterns\Behavioral\State;

/**
 *
 */
class Order
{
    /**
     * @var User
     */
    private User $client;
    /**
     * @var State|CreatedState
     */
    private State $state;
    /**
     * @var array
     */
    private array $logs;

    /**
     * @param User $client
     */
    public function __construct(User $client)
    {
        $this->client = $client;
        $this->state = new CreatedState();
    }

    /**
     * @return CreatedState|State
     */
    public function proceed()
    {
        $this->state->setOrder($this);
        $this->state->proceed();
        return $this->state;
    }

    /**
     * @return User
     */
    public function getClient(): User
    {
        return $this->client;
    }

    /**
     * @return State
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param State $state
     */
    public function setState(State $state): void
    {
        $this->state = $state;
    }


    /**
     * @param string $log
     * @return void
     */
    public function addLog(string $log)
    {
        $this->logs[] = $log;
    }

    /**
     * @return array
     */
    public function getLogs(): array
    {
        return $this->logs;
    }
}