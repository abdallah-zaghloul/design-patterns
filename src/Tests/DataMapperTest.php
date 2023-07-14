<?php

namespace AbdallahZaghloul\DesignPatterns\Tests;

use AbdallahZaghloul\DesignPatterns\Structural\DataMapper\DataMapper;
use AbdallahZaghloul\DesignPatterns\Structural\DataMapper\DB;
use AbdallahZaghloul\DesignPatterns\Structural\DataMapper\User;
use PHPUnit\Framework\TestCase;
class DataMapperTest extends TestCase
{
    private DB $storageManager;
    private User $firstUser;

    protected function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->firstUser = new User('Abdallah','test');
        $this->storageManager = new DB([$this->firstUser->getId() => $this->firstUser->toArray()]);
    }

    public function testCanGetUserById()
    {
        $dataMapper = new DataMapper($this->storageManager);
        $user = $dataMapper->find($this->firstUser->getId());
        $this->assertEquals($user , $this->firstUser);
    }

    public function testCanSaveUserData()
    {
        $dataMapper = new DataMapper($this->storageManager);
        [$name , $password] = ['Zaghloul', md5(rand())];
        $user = new User($name , $password);
        $this->assertEquals($user, $dataMapper->create($user->toArray()));
    }
}