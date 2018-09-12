<?php

namespace Spaceship;

use phpDocumentor\Reflection\Types\Boolean;

class Game extends GameRules
{
    private $score;
    private $winner;

    public function setScore($score)
    {
        $this->score = $score;
    }

    public function getScore()
    {
        return $this->score;
    }

    public function getWinner()
    {
        return $this->winner;
    }

    public function isAnybodyHere(array $shipsOnField) : Boolean
    {
        return empty($shipsOnField);
    }
}