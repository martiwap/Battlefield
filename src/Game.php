<?php

namespace Spaceship;

class Game
{
    public function isSpaceShipOnField()
    {
       if (!empty($shipsOnField)) {
           return true;
       }

       return false;
    }
}