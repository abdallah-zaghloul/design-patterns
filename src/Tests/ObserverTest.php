<?php /** @noinspection DuplicatedCode */

namespace AbdallahZaghloul\DesignPatterns\Tests;

use AbdallahZaghloul\DesignPatterns\Behavioral\Observer\Cashier;
use AbdallahZaghloul\DesignPatterns\Behavioral\Observer\Kitchen;
use AbdallahZaghloul\DesignPatterns\Behavioral\Observer\Restaurant;
use AbdallahZaghloul\DesignPatterns\Behavioral\Observer\Waiter;
use PHPUnit\Framework\TestCase;
class ObserverTest extends TestCase
{
    private Restaurant $restaurant;
    private Waiter $waiter;
    private Kitchen $kitchen;
    private Cashier $cashier;

    protected function setUp()
    {
        parent::setUp();

        $observers = [
            $this->waiter = new Waiter(),
            $this->kitchen = new Kitchen(),
            $this->cashier = new Cashier(),
        ];

        $this->restaurant = (new Restaurant())->attachAll(...$observers);
    }

    public function testRestaurantSubjectCanNotifyAllObserversWithOrder()
    {
        $this->restaurant->addOrder();
        $orderNumber = $this->restaurant->getOrderNumber();
        $this->assertEquals("Waiter is ready for order $orderNumber", $this->waiter->getState());
        $this->assertEquals("Kitchen is ready for order $orderNumber", $this->kitchen->getState());
        $this->assertEquals("Cashier is ready for order $orderNumber", $this->cashier->getState());
    }

    public function testRestaurantSubjectCanNotifyAllObserversWithMultipleOrders()
    {
        $this->restaurant->addOrder();
        $this->restaurant->addOrder();
        $this->restaurant->addOrder();
        $this->restaurant->addOrder();
        $this->restaurant->addOrder();
        $orderNumber = $this->restaurant->getOrderNumber();
        $this->assertEquals("Waiter is ready for order $orderNumber", $this->waiter->getState());
        $this->assertEquals("Kitchen is ready for order $orderNumber", $this->kitchen->getState());
        $this->assertEquals("Cashier is ready for order $orderNumber", $this->cashier->getState());
    }
}