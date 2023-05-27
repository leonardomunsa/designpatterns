<?php

class OrtodoxBuilder implements boxerBuilder
{
    private $guard;
    private $life;
    private $damage;
    private $speed;

    public function learnGuard()
    {
        $this->guard = 1;
    }

    public function __construct()
    {
        $this->life = 80;
        $this->damage = 10;
        $this->speed = 80;
    }

    public function throwAPunch()
    {
        return 'hook';
    }

    public function punchTheBag()
    {
        return 'one - cross';
    }

    public function jumpRow()
    {
        return 'jump row';
    }
}