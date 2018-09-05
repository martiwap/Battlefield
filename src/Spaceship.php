<?php

namespace Spaceship;

class Spaceship
{
    private $model;
    private $speed;
    private $damageModifier;
    private $health;

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

    public function getDamageModifier()
    {
        return $this->damageModifier;
    }

    public function getHealth()
    {
        return $this->health;
    }

    public function setHealth(int $health)
    {
        $this->health = $health;

        return $this;
    }

}
