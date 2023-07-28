<?php
namespace AbdallahZaghloul\DesignPatterns\Behavioral\Observer;
use SplObserver;
use SplSubject;
use SplObjectStorage;

/**
 *
 */
class Restaurant implements SplSubject
{
    /**
     * @var SplObjectStorage
     */
    private SplObjectStorage $observers;
    /**
     * @var int
     */
    private int $orderNumber;


    /**
     *
     */
    public function __construct()
    {
        $this->observers = new SplObjectStorage();
        $this->orderNumber = 0;
    }

    /**
     * @param SplObserver $observer
     * @return void
     */
    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    /**
     * @param SplObserver $observer
     * @return void
     */
    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    /**
     * @return void
     */
    public function notify()
    {
        /**
         * @var SplObserver $observer
         */
        foreach ($this->observers as $observer){
            $observer->update($this);
        }
    }

    /**
     * @return void
     */
    public function addOrder()
    {
        $this->orderNumber += 1;
        $this->notify();
    }

    /**
     * @return int
     */
    public function getOrderNumber(): int
    {
        return $this->orderNumber;
    }

    /**
     * @param SplObserver ...$splObservers
     * @return self
     */
    public function attachAll(SplObserver ...$splObservers): self
    {
        foreach ($splObservers as $splObserver){
            $this->attach($splObserver);
        }

        return $this;
    }
}