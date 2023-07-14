<?php
namespace AbdallahZaghloul\TokenAuthThirdPartyLibraryAdapterExample;

class TokenAuth
{
    /**
     * @var string
     */
    public static string $type = 'Bearer';

    /**
     * @param string|null $type
     * @param string|null $token
     * @return string
     */
    public function tokenLogin(?string $type = 'Bearer', ?string $token = null): string
    {
        return ($type ?? self::$type)."-".($token ?? self::generateToken());
    }

    /**
     * @return string
     */
    public static function generateToken(): string
    {
        return base64_encode(uniqid());
    }
}