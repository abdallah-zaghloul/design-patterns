<?php

namespace AbdallahZaghloul\DesignPatterns\Structural\Adapter\ThirdPartyPackagesExample;

interface IAuth
{
    /**
     * @param ...$credentials
     * @return string
     */
    public function login(...$credentials): string;
}