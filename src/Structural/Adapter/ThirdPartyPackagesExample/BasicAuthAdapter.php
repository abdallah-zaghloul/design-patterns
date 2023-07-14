<?php
namespace AbdallahZaghloul\DesignPatterns\Structural\Adapter\ThirdPartyPackagesExample;

use AbdallahZaghloul\BasicAuthThirdPartyLibraryAdapterExample\BasicAuth;

class BasicAuthAdapter implements IAuth
{
    /**
     * @var BasicAuth
     */
    private BasicAuth $auth;

    /**
     * @param BasicAuth $auth
     */
    public function __construct(BasicAuth $auth)
    {
        $this->auth = $auth;
    }

    /**
     * @param ...$credentials
     * @return string
     */
    public function login(...$credentials): string
    {
        [$userName, $password] = $credentials;
        return $this->auth->basicLogin($userName, $password);
    }
}