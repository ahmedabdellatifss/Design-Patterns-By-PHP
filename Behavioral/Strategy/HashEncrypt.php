<?php

namespace Behavioral\Strategy;

class HashEncrypt implements StrategyInterface
{
    public const TYPE ="Hash";
    public function Encrypt(string $data): array
    {
        return [hash('sha256',$data),self::TYPE];
    }
}