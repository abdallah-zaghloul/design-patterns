<?php
namespace AbdallahZaghloul\DesignPatterns\Behavioral\Mediator;

/**
 *
 */
interface IMediator
{
    /**
     * @param string $event
     * @param Road $road
     * @return mixed
     */
    public function action(string $event, Road $road);
}