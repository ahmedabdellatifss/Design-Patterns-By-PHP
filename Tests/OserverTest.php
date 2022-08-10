<?php

namespace Tests;

use Behavioral\Observer\Restaurant;
use Behavioral\Observer\Cashier;
use Behavioral\Observer\Kitchen;
use Behavioral\Observer\Waiter;
use PHPUnit\Framework\TestCase;

class OserverTest extends TestCase
{
    private $restaurant;
    private $waiter;
    private $cashier;
    private $kitchen;

    protected function setUp(): void
    {
        $this->restaurant = new Restaurant();
        $this->waiter = new Waiter();
        $this->kitchen = new Kitchen();
        $this->cashier = new Cashier();

        $this->restaurant->attach($this->cashier);
        $this->restaurant->attach($this->waiter);
        $this->restaurant->attach($this->kitchen);
    }

    public function testCanNotifyAllObserverWhenNewOrderIsComing()
    {
        $this->restaurant->addNewOrder();
        $this->assertEquals('Cashier is ready for Order number 1',$this->cashier->getState());
        $this->assertEquals('Kitchen is ready for Order number 1',$this->kitchen->getState());
        $this->assertEquals('Waiter is ready for Order number 1',$this->waiter->getState());
    }

    public function testCanNotifyAllOberversWhenNewOrderIsComing()
    {
        $this->restaurant->addNewOrder();
        $this->restaurant->addNewOrder();
        
        $this->assertEquals('Cashier is ready for Order number 2',$this->cashier->getState());
        $this->assertEquals('Kitchen is ready for Order number 2',$this->kitchen->getState());
        $this->assertEquals('Waiter is ready for Order number 2',$this->waiter->getState());
    }    
}