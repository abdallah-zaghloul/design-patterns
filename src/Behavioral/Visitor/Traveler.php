<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\Visitor;

/**
 *
 */
class Traveler implements IVisitor
{
    /**
     * @var string
     */
    private string $passport;
    /**
     * @var bool
     */
    private bool $hasBookedHotel;
    /**
     * @var int
     */
    private int $budget;
    /**
     * @var array
     */
    private array $tripHistory;

    /**
     * @param string $passport
     * @param bool $hasBookedHotel
     * @param int $budget
     */
    public function __construct(string $passport, bool $hasBookedHotel, int $budget)
    {
        $this->passport = $passport;
        $this->hasBookedHotel = $hasBookedHotel;
        $this->budget = $budget;
        $this->tripHistory = [];
    }


    /**
     * @param Cairo $cairo
     * @return mixed|void
     */
    public function visitCairo(Cairo $cairo)
    {
        $this->addToTripHistory($cairo->getName());
    }

    /**
     * @param London $london
     * @return mixed|void
     */
    public function visitLondon(London $london)
    {
        if ($london->canVisitLondon($this->passport)){
            $this->addToTripHistory($london->getName());
        }
    }

    /**
     * @param Sydney $sydney
     * @return void
     */
    public function visitSydney(Sydney $sydney)
    {
        if ($sydney->canPayBudget($this->budget)){
            $this->addToTripHistory($sydney->getName());
        }
    }

    /**
     * @param Bali $bali
     * @return void
     */
    public function visitBali(Bali $bali)
    {
        if ($bali->validateVisit($this->passport, $this->hasBookedHotel)){
            $this->addToTripHistory($bali->getName());
        }
    }

    /**
     * @param string $city
     * @return void
     */
    private function addToTripHistory(string $city)
    {
        $this->tripHistory[] = $city;
    }

    /**
     * @return array
     */
    public function getTripHistory(): array
    {
        return $this->tripHistory;
    }
}