<?php

namespace AbdallahZaghloul\DesignPatterns\Tests;

use AbdallahZaghloul\DesignPatterns\Behavioral\ChainOfResponsibility\AuthenticationHandler;
use AbdallahZaghloul\DesignPatterns\Behavioral\ChainOfResponsibility\AuthorizationHandler;
use AbdallahZaghloul\DesignPatterns\Behavioral\ChainOfResponsibility\IHandler;
use AbdallahZaghloul\DesignPatterns\Behavioral\ChainOfResponsibility\Request;
use PHPUnit\Framework\TestCase;
class ChainOfResponsibilityTest extends TestCase
{
    private Request $request;
    private AuthenticationHandler $authenticationHandler;
    private AuthorizationHandler $authorizationHandler;

    private ?int $unAuthenticatedId = null;
    private int $authorizedId = 1;
    private ?int $unAuthorizedId = 20;

    protected function setUp()
    {
        parent::setUp();

        $this->request = new Request();
        $this->authenticationHandler = new AuthenticationHandler();
        $this->authorizationHandler = new AuthorizationHandler();
    }

    public function testAuthorizationHandlerCanHandleUnAuthenticatedRequest()
    {
        $this->request->setId($this->unAuthenticatedId);
        $this->authenticationHandler->handle($this->request);

        $this->assertEquals(false, $this->request->isAuthenticated());
        $this->assertEquals(false, $this->request->isAuthorized());
        $this->assertEquals(false, $this->request->isDone());
        $this->assertEquals(AuthenticationHandler::class, $this->request->getHandler());
    }


    public function testAuthorizationHandlerCanHandleAuthorizedRequest()
    {
        $this->request->setId($this->authorizedId);
        $this->authenticationHandler->handle($this->request);
        $this->assertEquals(true, $this->request->isAuthenticated());
        $this->assertEquals(true, $this->request->isAuthorized());
        $this->assertEquals(true, $this->request->isDone());
        $this->assertEquals(AuthorizationHandler::class, $this->request->getHandler());
    }


    public function testAuthorizationHandlerCanHandleUnAuthorizedRequest()
    {
        $this->request->setId($this->unAuthorizedId);
        //override setNext()
        $this->authenticationHandler->setNext($this->authorizationHandler);
        $this->authenticationHandler->handle($this->request);

        $this->assertEquals(true, $this->request->isAuthenticated());
        $this->assertEquals(false, $this->request->isAuthorized());
        $this->assertEquals(false, $this->request->isDone());
        $this->assertEquals(AuthorizationHandler::class, $this->request->getHandler());
    }

}