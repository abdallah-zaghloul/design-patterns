<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\Strategy;

/**
 *
 */
class Base64Encryption extends Strategy
{

    /**
     * @return string
     */
    public function getAlg(): string
    {
        return "base64";
    }

    /**
     * @param string $data
     * @return array
     */
    public function encrypt(string $data): array
    {
        return [
          'alg' => $this->alg,
          'data' => base64_encode($data),
        ];
    }
}