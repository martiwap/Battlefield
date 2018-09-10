<?php

namespace spec\Spaceship;

use PhpSpec\ObjectBehavior;

class GameSpec extends ObjectBehavior
{
    function it_returns_score()
    {
        $this->setScore()->shouldReturn($this);
        //failed
    }

    function it_returns_true_if_ships_on_field()
    {
        $this->isAnybodyHere()->shouldReturn(false);
        //failed
    }
}