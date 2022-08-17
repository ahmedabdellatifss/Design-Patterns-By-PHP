<?php

namespace Behavioral\Strategy;

class Base64Encrypt implements StrategyInterface
{
    public const TYPE ="Base64";
    public function Encrypt(string $data): array
    {
        return [base64_encode($data),self::TYPE];
    }
}