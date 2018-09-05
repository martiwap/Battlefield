<?php

namespace spec\Spaceship;

use PhpSpec\ObjectBehavior;

class CivicSpec extends ObjectBehavior
{
    function it_returns_civic_model()
    {
        $this->getModel()->shouldReturn('civic');
    }

    function it_returns_civic_speed()
    {
        $this->getSpeed()->shouldReturn(200);
    }
}