<?php

    namespace Behavioral\Observer;

    use SplObserver;
    use SplSubject;

    class Waiter implements SplObserver
    {
        private $state;

        public function update(SplSubject $subject)
        {
            $this->state = sprintf("Waiter is ready for Order number %s" , $subject->getOrderNumber());
        }

        public function getState()
        {
            return $this->state;
        }
    }