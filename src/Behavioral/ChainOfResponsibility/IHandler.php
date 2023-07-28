<?php
namespace AbdallahZaghloul\DesignPatterns\Behavioral\ChainOfResponsibility;

/**
 *
 */
interface IHandler
{
    /**
     * @param IHandler $handler
     * @return mixed
     */
    public function setNext(self $handler);

    /**
     * @param Request $request
     * @return Request
     */
    public function handle(Request $request): Request;
}