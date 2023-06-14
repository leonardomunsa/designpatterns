<?php

class Striker
{
    private int $hp;
    private float $stamina;
    private array $record;
    private array $movements;
    
    public function punch()
    {
        $this->stamina - 10;
        return 'punch';
    }

    public function kick()
    {
        $this->stamina - 15;
        return 'kick';
    }

    public function attack($attack)
    {
        return $attack;
    }
}