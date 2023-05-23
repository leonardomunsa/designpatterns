<?php

class BrawlerBuilder implements boxerBuilder
{
    private $guard;

    public function learnGuard()
    {
        $this->guard = 0;
    }

    public function throwAPunch()
    {
        return 'punch';
    }

    public function punchTheBag()
    {
        return 'one - two';
    }
}