<?php
namespace Behavioral\Strategy;

class EncryptContext
{
    private StrategyInterface $strategy;

    public function __construct(StrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }


    public function setStrategy(StrategyInterface $strategy):void
    {
        $this->strategy = $strategy;
    }

    public function encryptString(string $data): array
    {
        return $this->strategy->Encrypt($data);
    }
}