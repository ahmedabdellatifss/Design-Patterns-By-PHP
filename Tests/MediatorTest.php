<?php

    namespace Tests;

use Behavioral\Mediator\leftRoad;
use Behavioral\Mediator\RightRoad;
use Behavioral\Mediator\RoadLightMediator;
use PHPUnit\Framework\TestCase;
use Behavioral\Mediator\Road;

    class MediatorTest extends TestCase
    {
        private $lightMediator;
        private $leftRoad;
        private $rightRoad;

        protected function setUp() :void
        {
            $this->leftRoad = new leftRoad();
            $this->rightRoad = new RightRoad();
            $this->lightMediator = new RoadLightMediator($this->rightRoad ,$this->leftRoad);
        }

        public function testCanMoveRightRoadBasedOnLeftRoad()
        {
            $this->lightMediator->action($this->leftRoad , Road::STOP_EVENT);

            self::assertEquals($this->rightRoad->getRoadStatus() , 'move');
        }

        public function testCanStopRightRoadBasedOnLeftRoad()
        {
            $this->lightMediator->action($this->leftRoad,Road::MOVE_EVENT);
            self::assertEquals($this->rightRoad->getRoadStatus(),'stop');
        }

        public function testCanMoveLeftRoadBasedOnRightRoad()
        {
            $this->lightMediator->action($this->rightRoad,Road::STOP_EVENT);
            self::assertEquals($this->leftRoad->getRoadStatus(),'move');
        }

        public function testCanStopLeftRoadBasedOnRightRoad()
        {
            $this->lightMediator->action($this->rightRoad,Road::MOVE_EVENT);
            self::assertEquals($this->leftRoad->getRoadStatus(),'stop');
        }
    }