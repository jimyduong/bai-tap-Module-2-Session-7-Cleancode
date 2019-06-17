<?php


include('TennisGame.php');

$tennisGame = new TennisGame();

$tennisGame->getScore('Nadal', 'Ferderer', 3, 2);

echo $tennisGame;