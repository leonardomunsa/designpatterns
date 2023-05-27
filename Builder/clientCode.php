<?php

function createBrawler(Director $director)
{
    $brawler = new BrawlerBuilder();
    $director->setBuilder($brawler);
    
    $director->createFighter();
    $director->train();
}

function createOrtodox(Director $director)
{
    $ortodox = new OrtodoxBuilder();
    $director->setBuilder($ortodox);
    
    $director->createFighter();
    $director->train();
}

$director = new Director();
createBrawler($director);
createOrtodox($director);