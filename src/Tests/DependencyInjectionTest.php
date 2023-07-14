<?php

namespace AbdallahZaghloul\DesignPatterns\Tests;

use AbdallahZaghloul\DesignPatterns\Structural\DependencyInjection\DBConfig;
use AbdallahZaghloul\DesignPatterns\Structural\DependencyInjection\DBConnection;
use PHPUnit\Framework\TestCase;
class DependencyInjectionTest extends TestCase
{
    public function testCanGetDatabaseStringUrlFromDatabaseConnection()
    {
        [$DBType, $DBUser, $DBHost, $password,$port, $DBName] = ["mysql", "root", "localhost", "12345678", 3306,"testDB"];
        $DBConfig = new DBConfig($DBType, $DBHost, $DBUser, $password, $port, $DBName);
        $DBConnection = new DBConnection($DBConfig);
        $this->assertEquals("$DBType://$DBUser:$password@$DBHost:$port/$DBName", $DBConnection->getConnectionString());
    }
}