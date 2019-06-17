<?php
include_once "TennisGame.php";

use PHPUnit\Framework\TestCase;

class TennisTest extends TestCase
{
    public function testTennisTestScore()
    {
        $player1 = "Rafael Nadal";
        $player2 = "Roger Federer";
        $ScorePlayer1 = 3;
        $ScorePlayer2 = 3;

        $expected = "Win for ".$player2;

        $tennisTest = new TennisGame();
        $tennisTest->getScore($player1, $player2, $ScorePlayer1, $ScorePlayer2);
        $result = $tennisTest;
        $this->assertEquals($expected, $result);
    }
}
