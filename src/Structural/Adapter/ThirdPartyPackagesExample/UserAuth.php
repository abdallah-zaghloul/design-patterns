<?php

namespace AbdallahZaghloul\DesignPatterns\Structural\Adapter\ThirdPartyPackagesExample;

use AbdallahZaghloul\BasicAuthThirdPartyLibraryAdapterExample\BasicAuth;

class UserAuth
{
    /**
     * @var IAuth
     */
    private IAuth $auth;

    public function __construct(IAuth $auth)
    {
        $this->auth = $auth;
    }

    /**
     * @param ...$credentials
     * @return string
     */
    public function signIn(...$credentials): string
    {
        return $this->auth->login(...$credentials);
    }
}