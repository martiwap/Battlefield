<?php

namespace Spaceship\SpaceShipModelSpec;

use Spaceship\Spaceship;

class Nsx extends Spaceship
{
    private $model = 'nsx';
    private $speed = 180;

    public function getModel()
    {
        return $this->model;
    }

    public function getSpeed()
    {
        return $this->speed;
    }
}