<?php

class Director
{
    private boxerBuilder $builder;

    public function setBuilder(boxerBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function createFighter()
    {
        $this->builder->learnGuard();
        $this->builder->throwAPunch();
        $this->builder->punchTheBag();
    }

    public function train()
    {
        $this->builder->punchTheBag();
        $this->builder->jumpRow();
    }
}