<?php

    namespace Behavioral\Observer;

use SplObserver;
use SplSubject;

    class Restaurant implements SplSubject
    {
        private $orderNumber =0;
        private $observers;
        public function __construct()
        {
            $this->observers = new \SplObjectStorage();
        }

        public function attach(SplObserver $observer): void
        {
            $this->observers->attach($observer);
        }

        public function detach(SplObserver $observer): void
        {
            $this->observers->detach($observer);
        }

        public function notify(): void
        {
            foreach($this->observers as $observer)
            {
                $observer->update($this);
            }
        }

        public function addNewOrder()
        {
            $this->orderNumber += 1;
            $this->notify();
        }

        public function getOrderNumber():int
        {
            return $this->orderNumber;
        }
    }