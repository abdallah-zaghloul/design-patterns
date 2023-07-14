<?php

namespace AbdallahZaghloul\DesignPatterns\Structural\DataMapper;

class DB
{
    /**
     * @var array
     */
    private array $data = [];


    /**
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $this->data = $data;
    }


    /**
     * @param string $id
     * @return array|null
     */
    public function findById(string $id): ?array
    {
        return @$this->data[$id];
    }


    /**
     * @param string $id
     * @param array $user
     * @return array
     */
    public function save(string $id , array $user): array
    {
        $this->data[$id] = $user;
        return $user;
    }

}