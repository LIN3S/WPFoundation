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

use LIN3S\WordPressPhpSpecBridge\ObjectBehavior;

/**
 * Spec of Assets class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class AssetsSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('fixtures\LIN3S\WPFoundation\Assets');
    }

    function it_extends_assets()
    {
        $this->shouldHaveType('LIN3S\WPFoundation\Configuration\Assets\Assets');
    }

    function it_implements_assets_interface()
    {
        $this->shouldHaveType('LIN3S\WPFoundation\Configuration\Assets\AssetsInterface');
    }

    function it_should_be_admin_assets()
    {
        $this->adminAssets();
    }

    function it_should_be_assets()
    {
        $this->assets();
    }
}
