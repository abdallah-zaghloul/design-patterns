<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\Mediator;

/**
 *
 */
abstract class Road
{
    /**
     *
     */
    public const OPEN_EVENT = 'OPEN';


    /**
     *
     */
    public const CLOSE_EVENT = 'CLOSE';


    /**
     * @var string
     */
    private string $status;


    /**
     * @var IMediator|null
     */
    private ?IMediator $mediator;


    /**
     * @param IMediator|null $mediator
     */
    public function __construct(?IMediator $mediator = null)
    {
        $this->mediator = $mediator;
        $this->status = self::OPEN_EVENT;
    }

    /**
     * @return string
     */
    abstract public function getId(): string;

    /**
     * @return void
     */
    public function open()
    {
        $this->status = self::OPEN_EVENT;
    }

    /**
     * @return void
     */
    public function close()
    {
        $this->status = self::CLOSE_EVENT;
    }

    /**
     * @param IMediator $mediator
     */
    public function setMediator(IMediator $mediator): void
    {
        $this->mediator = $mediator;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
}