<?php

    namespace Tests;

use Behavioral\Memento\CareTaker;
use Behavioral\Memento\Originator;
use PHPUnit\Framework\TestCase;

    class MementoTest extends TestCase
    {
        private $originator;
        private $caretaker;
        public function SetUp(): void
        {
            $this->originator = new Originator();
            $this->caretaker = new CareTaker($this->originator);
        }

        public function testCanSaveCodeFileUpdates()
        {
            $this->originator->addNewEcho();
            $this->originator->addNewVar();

            $this->caretaker->commit();
            $codefile = $this->originator->getCodeFile();

            $this->assertEquals(3 , count($codefile->getLines()));
        }

        public function testCanRestoreCodeFile()
        {
            $this->originator->addNewEcho();
            $this->originator->addNewVar();
            $this->caretaker->commit();
            $this->originator->addNewEcho();
            $this->originator->addNewEcho();

            $this->caretaker->rollBack();
            $codefile = $this->originator->getCodeFile();

            $this->assertEquals(3,count($codefile->getLines()));
        }
    }