<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\ChainOfResponsibility;

/**
 *
 */
abstract class Handler implements IHandler
{
    /**
     * @var IHandler|null
     */
    private ?IHandler $next = null;

    /**
     * @param IHandler $handler
     * @return IHandler
     */
    public function setNext(IHandler $handler): IHandler
    {
        return $this->next = $handler;
    }

    /**
     * @return IHandler|null
     */
    public function getNext(): ?IHandler
    {
        return $this->next;
    }

    /**
     * @param Request $request
     * @return Request
     */
    public function handle(Request $request): Request
    {
       return $this->next ? $this->next->handle($request) : $request;
    }

}