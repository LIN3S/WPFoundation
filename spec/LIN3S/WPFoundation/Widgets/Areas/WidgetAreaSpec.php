<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\LIN3S\WPFoundation\Widgets\Areas;

use LIN3S\WordPressPhpSpecBridge\ObjectBehavior;

/**
 * Spec of WidgetArea class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class WidgetAreaSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('fixtures\LIN3S\WPFoundation\WidgetArea');
    }

    function it_extends_widget_area()
    {
        $this->shouldHaveType('LIN3S\WPFoundation\Widgets\Areas\WidgetArea');
    }

    function it_implements_widget_area_interface()
    {
        $this->shouldHaveType('LIN3S\WPFoundation\Widgets\Areas\WidgetAreaInterface');
    }

    function it_should_widget_area()
    {
        $this->widgetArea();
    }
}
