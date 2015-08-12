<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\LIN3S\WPFoundation\Widgets;

use LIN3S\WordPressPhpSpecBridge\ObjectBehavior;
use Prophecy\Argument;

/**
 * Spec of Widget class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class WidgetSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('fixtures\LIN3S\WPFoundation\Widget');
        $this->beConstructedWith('widget id base', 1, 'Widget description');
    }

    function it_extends_widget()
    {
        $this->shouldHaveType('LIN3S\WPFoundation\Widgets\Widget');
    }

    function it_implements_widget_interface()
    {
        $this->shouldHaveType('LIN3S\WPFoundation\Widgets\WidgetInterface');
    }

    function it_should_return_name()
    {
        $this->name()->shouldReturn('widget id base');
    }

    function it_should_return_number()
    {
        $this->number()->shouldReturn(false);
    }

    function it_should_register()
    {
        $this->register();
    }
}
