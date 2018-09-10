<?php

namespace Spaceship;

class AISpaceship extends Spaceship
{
    private $model = 'AI';
    private $speed = 200;
    private $damageModifier = 50;
    private $health = 500;

    public function getModel()
    {
        return $this->model;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function setDamageModifier(int $damageModifier)
    {
        $this->damageModifier = $damageModifier;

        return $this;
    }

    public function setHealth(int $health)
    {
        $this->health = $health;

        return $this;
    }
}