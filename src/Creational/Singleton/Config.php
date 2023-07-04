<?php

namespace AbdallahZaghloul\DesignPatterns\Creational\Singleton;
/**
 * Applying the Singleton pattern to the configuration storage is also a common
 * practice. Often you need to access application configurations from a lot of
 * different places of the program. Singleton gives you that comfort.
 */
class Config extends Singleton
{
    /**
     * @var array
     */
    private array $hashmap = [];

    /**
     * @param string $key
     * @return string
     */
    public function getValue(string $key): string
    {
        return $this->hashmap[$key];
    }

    /**
     * @param string $key
     * @param string $value
     * @return void
     */
    public function setValue(string $key, string $value): void
    {
        $this->hashmap[$key] = $value;
    }
}