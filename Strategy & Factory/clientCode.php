<?php

$grapplingStrategyFactory = new GrapplingStrategyFactory();
$jiujitsuStrategy = $grapplingStrategyFactory->createGrapplingStrategy('JiuJitsu');
$jiujitsuStrategy->grapple();

$grapplingContext = new GrapplingContext();
$grapplingContext->chooseGrapplingArt($jiujitsuStrategy);
$grapplingContext->grapple();
