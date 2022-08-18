<?php

namespace Behavioral\Visitor;

interface VisitorInterface
{
    public function VisitCairo(Cairo $cairo);
    public function VisitLondon(London $landon);
    public function VisitSydney(Sydney $sydney);
    public function VisitBali(Bali $bali);
}