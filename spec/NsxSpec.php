<?php

namespace spec\Spaceship;

use PhpSpec\ObjectBehavior;

class NsxSpec extends ObjectBehavior
{
    function it_returns_nsx_model()
    {
        $this->getModel()->shouldReturn('nsx');
    }

    function it_returns_nsx_speed()
    {
        $this->getSpeed()->shouldReturn(180);
    }
}