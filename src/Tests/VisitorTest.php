<?php
/** @noinspection PhpPrivateFieldCanBeLocalVariableInspection */
/** @noinspection DuplicatedCode */

namespace AbdallahZaghloul\DesignPatterns\Tests;

use AbdallahZaghloul\DesignPatterns\Behavioral\Visitor\Bali;
use AbdallahZaghloul\DesignPatterns\Behavioral\Visitor\Cairo;
use AbdallahZaghloul\DesignPatterns\Behavioral\Visitor\ICity;
use AbdallahZaghloul\DesignPatterns\Behavioral\Visitor\London;
use AbdallahZaghloul\DesignPatterns\Behavioral\Visitor\Sydney;
use AbdallahZaghloul\DesignPatterns\Behavioral\Visitor\Traveler;
use PHPUnit\Framework\TestCase;
class VisitorTest extends TestCase
{
    private array $tripPlan;

    private Cairo $cairo;
    private Sydney $sydney;
    private London $london;
    private Bali $bali;

    protected function setUp()
    {
        parent::setUp();

        $this->tripPlan = [
          $this->cairo = new Cairo(),
          $this->sydney = new Sydney(),
          $this->london = new London(),
          $this->bali = new Bali(),
        ];
    }

    public function testCanEgPassportVisitSomeCountries()
    {
        $traveler = new Traveler("EG",true,1000);
        array_walk($this->tripPlan,fn(ICity $city) => $city->accept($traveler));
        $this->assertEquals([$this->cairo->getName(), $this->bali->getName()] , $traveler->getTripHistory());
    }

    public function testCanUSPassportVisitAllCountries()
    {
        $traveler = new Traveler("US",true,90000);
        array_walk($this->tripPlan,fn(ICity $city) => $city->accept($traveler));
        $allCountries = array_map(fn(ICity $city) => $city->getName(), $this->tripPlan);
        $this->assertEquals($allCountries , $traveler->getTripHistory());
    }
}