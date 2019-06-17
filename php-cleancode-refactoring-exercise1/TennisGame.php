<?php
const Number_Player=2;
const Tie_Break=4;

class TennisGame
{
    public $score = '';

    public function getScore($player1Name, $player2Name, $playerScore1, $playerScore2)
    {
//        $tempScore=0;

        if ($playerScore1==$playerScore2) {
            switch ($playerScore1)
            {
                case 0:
                    $this->score = "Love-All";
                    break;
                case 1:
                    $this->score = "Fifteen-All";
                    break;
                case 2:
                    $this->score = "Thirty-All";
                    break;
                case 3:
                    $this->score = "Forty-All";
                    break;
                default:
                    $this->score = "Deuce";
                    break;

            }
        }
        else if ($playerScore1>=Tie_Break || $playerScore2>=Tie_Break)
        {
            $minusResult = $playerScore1-$playerScore2;
            if ($minusResult==1) $this->score ="Advantage ".$player1Name;
            else if ($minusResult ==-1) $this->score ="Advantage ".$player2Name;
            else if ($minusResult>=2) $this->score = "Win for ".$player1Name;
            else $this->score ="Win for ".$player2Name;
        }
        else
        {
            for ($i=1; $i<=Number_Player; $i++)
            {
                if ($i==1) $tempScore = $playerScore1;
                else { $this->score.="-"; $tempScore = $playerScore2;}
                switch($tempScore)
                {
                    case 0:
                        $this->score.="Love";
                        break;
                    case 1:
                        $this->score.="Fifteen";
                        break;
                    case 2:
                        $this->score.="Thirty";
                        break;
                    case 3:
                        $this->score.="Forty";
                        break;
                }
            }
        }
    }

    public function __toString()
    {
        return $this->score;
    }
}