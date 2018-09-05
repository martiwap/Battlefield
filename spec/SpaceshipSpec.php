<?php

namespace spec\Spaceship;

use PhpSpec\ObjectBehavior;
use Spaceship\Spaceship;

class SpaceshipSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Spaceship::class);
    }

    function it_returns_int_damage_modifier()
    {
        $this->setDamageModifier(20)->shouldReturn($this);
    }

    function it_returns_int_heath()
    {
        $this->setHealth(10)->shouldReturn($this);
    }
}