<?php
namespace AbdallahZaghloul\DesignPatterns\Structural\Adapter;

class AutomaticEngine implements IThirdPartyEngine
{
    /**
     * @return string
     */
    public function startTurbo(): string
    {
        return 'Starting Turbo Engine';
    }
}