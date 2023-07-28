<?php /** @noinspection DuplicatedCode */

namespace AbdallahZaghloul\DesignPatterns\Tests;

use AbdallahZaghloul\DesignPatterns\Behavioral\Mediator\RightRoad;
use AbdallahZaghloul\DesignPatterns\Behavioral\Mediator\LeftRoad;
use AbdallahZaghloul\DesignPatterns\Behavioral\Mediator\Road;
use AbdallahZaghloul\DesignPatterns\Behavioral\Mediator\TrafficLightMediator;
use PHPUnit\Framework\TestCase;
class MediatorTest extends TestCase
{
    private TrafficLightMediator $trafficLightMediator;
    private RightRoad $rightRoad;
    private LeftRoad $leftRoad;

    protected function setUp()
    {
        parent::setUp();

        $this->rightRoad = new RightRoad();
        $this->leftRoad = new LeftRoad();
        $this->trafficLightMediator = new TrafficLightMediator($this->rightRoad, $this->leftRoad);
    }

    public function testCanSwitchToRightRoad()
    {
        $this->trafficLightMediator->action(Road::CLOSE_EVENT, $this->leftRoad);
        $this->assertEquals(Road::OPEN_EVENT, $this->rightRoad->getStatus());
    }

    public function testCanSwitchToLeftRoad()
    {
        $this->trafficLightMediator->action(Road::CLOSE_EVENT, $this->rightRoad);
        $this->assertEquals(Road::OPEN_EVENT, $this->leftRoad->getStatus());
    }

}