<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\LIN3S\WPFoundation\Configuration\Acf;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Custom ACF Wysiwyg class adding some useful features.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class WysiwygSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith([]);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('LIN3S\WPFoundation\Configuration\Acf\Wysiwyg');
    }
    
    function its_toolbars()
    {
        $this->toolbars([])->shouldBeArray();
    }
}
