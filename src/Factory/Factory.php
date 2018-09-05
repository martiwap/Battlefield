<?php

use Spaceship\Spaceship;

class Factory
{
    public static function buildSpaceShip(): Spaceship
    {
        return new Spaceship();
    }
}