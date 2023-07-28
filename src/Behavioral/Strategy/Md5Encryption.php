<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\Strategy;

/**
 *
 */
class Md5Encryption extends Strategy
{

    /**
     * @param string $data
     * @return array
     */
    public function encrypt(string $data): array
    {
        return [
          'alg' => $this->alg,
          'data' => md5($data),
        ];
    }

    /**
     * @return string
     */
    public function getAlg(): string
    {
        return "md5";
    }
}