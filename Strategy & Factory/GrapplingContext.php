<?php

class GrapplingContext
{
    private GrapplingStrategy $grapplingStrategy;

    public function chooseGrapplingArt(GrapplingStrategy $grapplingStrategy)
    {
        $this->grapplingStrategy = $grapplingStrategy;
    }

    public function grapple()
    {
        $this->grapplingStrategy->grapple();
    }

}