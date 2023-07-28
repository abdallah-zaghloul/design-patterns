<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\Mediator;

/**
 *
 */
class TrafficLightMediator implements IMediator
{
    /**
     * @var RightRoad
     */
    private RightRoad $rightRoad;


    /**
     * @var LeftRoad
     */
    private LeftRoad $leftRoad;

    /**
     * @param RightRoad $rightRoad
     * @param LeftRoad $lefRoad
     */
    public function __construct(RightRoad $rightRoad, LeftRoad $lefRoad)
    {
        $this->rightRoad = $rightRoad;
        $this->rightRoad->setMediator($this);
        $this->leftRoad = $lefRoad;
        $this->leftRoad->setMediator($this);
    }


    /**
     * @param string $event
     * @param Road $road
     * @return mixed|void
     */
    public function action(string $event, Road $road)
    {
        list($id, $rightRoadId, $leftRoadId) = [$road->getId(), $this->rightRoad->getId(), $this->leftRoad->getId()];

        switch ($id) {
            case $id === $leftRoadId :
                $this->switchRoad($event, $this->rightRoad);
                break;
            case $id === $rightRoadId :
                $this->switchRoad($event, $this->leftRoad);
                break;
        }
    }

    /**
     * @param string $event
     * @param Road $secondRoad
     * @return void
     */
    private function switchRoad(string $event, Road $secondRoad)
    {
        $event === Road::OPEN_EVENT ? $secondRoad->close() : $secondRoad->open();
    }
}