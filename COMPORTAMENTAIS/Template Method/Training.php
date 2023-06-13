<?php

abstract class Training
{
    public function workout()
    {
        $this->warmup();
        $this->benchPress();
        $this->pullUp();
        $this->squat();
    }

    public function warmup()
    {

    }

    abstract public function benchPress();

    abstract public function pullUp();

    abstract public function squat()
}