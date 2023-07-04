<?php

namespace AbdallahZaghloul\DesignPatterns\Tests;
use AbdallahZaghloul\DesignPatterns\Creational\Singleton\Collection;
use AbdallahZaghloul\DesignPatterns\Creational\Singleton\Config;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testConfigSingleton()
    {
        // Check how Config singleton saves data...
        $config_1 = Config::getInstance();
        list($userKey, $passwordKey, $user, $password) = ["user","password","Test User","Test Password"];

        $config_1->setValue($userKey, $user);
        $config_1->setValue($passwordKey, $password);

        $config_2 = Config::getInstance();
        $this->assertEquals($user,$config_2->getValue($userKey));
        $this->assertEquals($password,$config_2->getValue($passwordKey));
    }

    public function testCollectionSingleton()
    {
        $collection_1 = Collection::getInstance();
        list($phoneKey, $emailKey, $phone, $email) = ["phone","email","+20 1098526412","3bdallahzaghloul@gmail.com"];
        $collection_1->add($phoneKey,$phone);
        $collection_1->add($emailKey,$email);

        // Check how Collection Store data
        $collection_2 = Collection::getInstance();
        $this->assertEquals($phone,$collection_2->get($phoneKey));

        // Check how Collection delete data
        $collection_1->forget($emailKey);
        $this->assertNull($collection_2->get($emailKey));
    }
}