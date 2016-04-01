<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-2016 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\LIN3S\WPFoundation\Ajax;

use LIN3S\WordPressPhpSpecBridge\ObjectBehavior;

/**
 * Spec of Ajax class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class AjaxSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('fixtures\LIN3S\WPFoundation\Ajax');
    }

    function it_extends_ajax()
    {
        $this->shouldHaveType('LIN3S\WPFoundation\Ajax\Ajax');
    }

    function it_implements_ajax_interface()
    {
        $this->shouldHaveType('LIN3S\WPFoundation\Ajax\AjaxInterface');
    }
}
