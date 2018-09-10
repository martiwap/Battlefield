<?php

namespace spec\Spaceship\SpaceShipModelSpec\Jazz;

use PhpSpec\ObjectBehavior;

class JazzSpec extends ObjectBehavior
{
    function it_returns_jazz_model()
    {
        $this->getModel()->shouldReturn('jazz');
    }

    function it_returns_jazz_speed()
    {
        $this->getSpeed()->shouldReturn(130);
    }
}