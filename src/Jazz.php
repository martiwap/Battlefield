<?php

namespace Spaceship;

class Jazz extends Spaceship
{
    private $model = 'jazz';
    private $speed = 130;

    public function getModel()
    {
        return $this->model;
    }

    public function getSpeed()
    {
        return $this->speed;
    }
}