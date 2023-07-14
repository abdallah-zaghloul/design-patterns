<?php
namespace AbdallahZaghloul\DesignPatterns\Structural\Adapter\ThirdPartyPackagesExample;

use AbdallahZaghloul\TokenAuthThirdPartyLibraryAdapterExample\TokenAuth;

class TokenAuthAdapter implements IAuth
{
    /**
     * @var TokenAuth
     */
    private TokenAuth $auth;

    /**
     * @param TokenAuth $auth
     */
    public function __construct(TokenAuth $auth)
    {
        $this->auth = $auth;
    }

    /**
     * @param ...$credentials
     * @return string
     */
    public function login(...$credentials): string
    {
        [$type, $token] = $credentials;
        return $this->auth->tokenLogin($type, $token);
    }
}