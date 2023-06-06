<?php

class MmaTraining implements Grappling
{
    private Striker $striker;

    public function __construct(Striker $striker)
    {
        $this->striker = $striker;
    }

    public function grapple($movement)
    {
        $this->striker->attack($movement);
    }
}