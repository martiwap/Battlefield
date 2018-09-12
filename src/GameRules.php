<?php

namespace Spaceship;

use phpDocumentor\Reflection\Types\Boolean;

class GameRules
{
   private $winner;
   private $score;
   private $shipsOnField;

   public function getWinner()
   {
       return $this->winner;
   }

   public function getScore()
   {
       return $this->score;
   }

   public function isAnybodyHere(array $shipsOnField) : Boolean
   {
       return $this->shipsOnField;
   }
}