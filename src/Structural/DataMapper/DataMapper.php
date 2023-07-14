<?php

namespace AbdallahZaghloul\DesignPatterns\Structural\DataMapper;

class DataMapper
{
    /**
     * @var DB
     */
    private DB $DB;


    /**
     * @param DB $DB
     */
    public function __construct(DB $DB)
    {
        $this->DB = $DB;
    }


    /**
     * @param string $id
     * @return User
     */
    public function find(string $id): User
    {
        $rawUser = $this->DB->findById($id);
        return new User($rawUser['name'] , $rawUser['password'] , $rawUser['id']);
    }


    /**
     * @param array $user
     * @return User
     */
    public function create(array $user): User
    {
        $this->DB->save($user['id'], $user);
        return new User($user['name'],$user['password'], $user['id']);
    }
}