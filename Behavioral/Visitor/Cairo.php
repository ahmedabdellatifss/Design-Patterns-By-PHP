<?php

namespace Behavioral\Visitor;

class Cairo implements CityInterface
{
    public function accept(VisitorInterface $vistor): void
    {
        $vistor->VisitCairo($this);
    }

    public function allowToEnter(string $passPort) :bool
    {
        return in_array($passPort , ['EG','UK' ,'DE']);
    }

    public function visitPyramids():void 
    {
        echo 'Pyramids';
    }
}
