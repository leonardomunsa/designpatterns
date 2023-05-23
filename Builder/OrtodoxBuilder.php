<?php

class OrtodoxBuilder implements boxerBuilder
{
    private $guard;

    public function learnGuard()
    {
        $this->guard = 2;
    }

    public function throwAPunch()
    {
        return 'hook';
    }

    public function punchTheBag()
    {
        return 'one - cross';
    }
}