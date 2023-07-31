<?php

namespace AbdallahZaghloul\DesignPatterns\Creational\Singleton;

class Collection extends Singleton
{
    /**
     * @var array
     */
    private array $data = [];

    /**
     * @param string $key
     * @param string $value
     * @return void
     */
    public function add(string $key, string $value)
    {
        $this->data[$key] = $value;
    }

    /**
     * @param string $key
     * @return void
     */
    public function forget(string $key)
    {
        unset($this->data[$key]);
    }

    /**
     * @param string $key
     * @return mixed
     */
    public function get(string $key)
    {
        return null_catch($this->data, $key);
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData(array $data): void
    {
        $this->data = $data;
    }
}