<?php

namespace spec\Spaceship;

use PhpSpec\ObjectBehavior;

class GameSpec extends ObjectBehavior
{
    function it_returns_false_if_no_ships_on_field()
    {
        $this->isSpaceShipOnField()->shouldReturn(false);
    }
}