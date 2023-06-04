<?php

class GrapplingStrategyFactory
{
    public function createGrapplingStrategy($martialArt)
    {
        switch($martialArt) {
            case 'Wrestling':
                return new WrestlingGrappling();
            case 'JiuJitsu':
                return new JiuJitsuGrappling();
            case 'Judo':
                return new JudoGrappling();
            default:
                return 'This is striking. Learn how to grapple'    
        }
    }
}