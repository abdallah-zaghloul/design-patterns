<?php
namespace AbdallahZaghloul\DesignPatterns\Structural\Adapter;

interface IThirdPartyEngine
{
    /**
     * @return string
     */
    public function startTurbo(): string;
}