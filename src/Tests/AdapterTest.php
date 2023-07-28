<?php

namespace AbdallahZaghloul\DesignPatterns\Tests;

use AbdallahZaghloul\DesignPatterns\Structural\Adapter\AutomaticEngine;
use AbdallahZaghloul\DesignPatterns\Structural\Adapter\Car;
use AbdallahZaghloul\DesignPatterns\Structural\Adapter\EngineAdapter;
use AbdallahZaghloul\DesignPatterns\Structural\Adapter\ManualEngine;
use AbdallahZaghloul\DesignPatterns\Structural\Adapter\ThirdPartyPackagesExample\BasicAuthAdapter;
use AbdallahZaghloul\DesignPatterns\Structural\Adapter\ThirdPartyPackagesExample\TokenAuthAdapter;
use AbdallahZaghloul\DesignPatterns\Structural\Adapter\ThirdPartyPackagesExample\UserAuth;
use AbdallahZaghloul\TokenAuthThirdPartyLibraryAdapterExample\TokenAuth;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testCanStartManualCar()
    {
        $engine = new ManualEngine();
        $car = new Car($engine);
        $this->assertEquals('Starting Manual Engine', $car->start());
    }

    public function testCanStartTurboEngine()
    {
        $engine = new AutomaticEngine();
        $adapter = new EngineAdapter($engine);
        $car = new Car($adapter);
        $this->assertEquals('Starting Turbo Engine', $car->start());
    }
/**
    public function testCanAuthWithBasicAuthLibrary()
    {
        $basicAuthAdapter = $this->createMock(BasicAuthAdapter::class);
        [$userName, $password] = ['test user', 'test password'];
        $basicAuthAdapter->expects($this->once())->method('login')->willReturn("$userName-$password");
        $userAuth = new UserAuth($basicAuthAdapter);
        $expected = $userAuth->signIn($userName,$password);
        $this->assertEquals($expected,"$userName-$password");
    }

    public function testCanAuthWithTokenAuthLibrary()
    {
        $tokenAuthAdapter = $this->createMock(TokenAuthAdapter::class);
        [$type, $token] = [TokenAuth::$type, TokenAuth::generateToken() ];
        $tokenAuthAdapter->expects($this->once())->method('login')->willReturn("$type-$token");
        $userAuth = new UserAuth($tokenAuthAdapter);
        $expected = $userAuth->signIn($type, $token);
        $this->assertEquals($expected,"$type-$token");
    }
 **/
}