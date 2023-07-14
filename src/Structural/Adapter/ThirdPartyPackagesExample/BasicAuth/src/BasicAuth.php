<?php
namespace AbdallahZaghloul\BasicAuthThirdPartyLibraryAdapterExample;

class BasicAuth
{
    /**
     * @param $userName
     * @param $password
     * @return string
     */
    public function basicLogin($userName, $password): string
    {
        return $userName."-".$password;
    }
}