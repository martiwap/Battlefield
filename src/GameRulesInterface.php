<?php

namespace Spaceship;

interface GameRulesInterface
{
   public function getWinner();

   public function getScore();

   public function isAnybodyHere(array $arrayOfShips);


}