<?php

namespace Spaceship\SpaceShipModelSpec;

use Spaceship\Spaceship;

class Civic extends Spaceship
{
    private $model = 'civic';
    private $speed = 200;

    public function getModel()
    {
        return $this->model;
    }

    public function getSpeed()
    {
        return $this->speed;
    }
}