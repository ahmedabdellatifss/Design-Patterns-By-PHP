<?php

    namespace Tests;

use Behavioral\Command\CLIInvoker;
use Behavioral\Command\DeployCommand;
use Behavioral\Command\GitReceiver;
use Behavioral\Command\RevertCommand;
use PHPUnit\Framework\TestCase;

    class CommandTest extends TestCase
    {
        private $invoker;
        protected function setUp(): void
        {
            $this->invoker = new CLIInvoker();

        }

        public function testCanExecuteDeployCommand()
        {
            $receiver = new GitReceiver();
            $command = new DeployCommand($receiver);
            $this->invoker->setCommand($command);
            $this->invoker->run();

            self::assertCount(3 , $receiver->getGitLog());
            self::assertEquals(['Git Add','Git Commit','Git Push'] , $receiver->getGitLog());
        }


        public function testCanExecuteRevertCommand()
        {
            $receiver = new GitReceiver();
            $command = new DeployCommand($receiver);
            $this->invoker->setCommand($command);
            $this->invoker->run();

            $revertCommand = new RevertCommand($receiver);
            $this->invoker->setCommand($revertCommand);
            $this->invoker->run();

            self::assertCount(1 , $receiver->getGitLog());
            self::assertEquals(['Git Revert'] , $receiver->getGitLog());
        }
    }