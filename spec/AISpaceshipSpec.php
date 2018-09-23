<?php

namespace spec\Spaceship;

use PhpSpec\ObjectBehavior;

class AISpaceshipSpec extends ObjectBehavior
{
    function it_returns_ai_model()
    {
        $this->getModel()->shouldReturn('AI');
    }

    function it_returns_ai_speed()
    {
        $this->getSpeed()->shouldReturn(200);
    }
}