<?php

class BrawlerBuilder implements boxerBuilder
{
    private $guard;
    private $life;
    private $damage;
    private $speed;

    public function __construct()
    {
        $this->life = 100;
        $this->damage = 20;
        $this->speed = 40;
    }

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

    public function jumpRow()
    {
        return 'jump row';
    }
}