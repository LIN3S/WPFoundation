<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\LIN3S\WPFoundation\Configuration\Assets;

use PhpSpec\ObjectBehavior;

/**
 * Spec of Assets abstract class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class AssetsSpec extends  ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('Fixtures\LIN3S\WPFoundation\Configuration\Assets');
    }
    
    function it_is_initializable()
    {
        $this->shouldHaveType('LIN3S\WPFoundation\Configuration\Assets\Assets');
    }

    function it_implements_assets_interface()
    {
        $this->shouldImplement('LIN3S\WPFoundation\Configuration\Assets\AssetsInterface');
    }
    
    function it_enqueues_scripts_and_styles()
    {
        $this->assets();
    }
}
