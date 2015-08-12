<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\LIN3S\WPFoundation\Configuration\Theme;

use LIN3S\WordPressPhpSpecBridge\ObjectBehavior;

/**
 * Spec of Theme class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class ThemeSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('fixtures\LIN3S\WPFoundation\Theme');
    }

    function it_extends_theme()
    {
        $this->shouldHaveType('LIN3S\WPFoundation\Configuration\Theme\Theme');
    }

    function it_implements_theme_interface()
    {
        $this->shouldHaveType('LIN3S\WPFoundation\Configuration\Theme\ThemeInterface');
    }

    function it_should_be_class()
    {
        $this->classes();
    }

    function it_should_return_templates()
    {
        $this->templates(['my-template' => 'MyTemplate'])->shouldReturn([
            'my-template' => 'MyTemplate', 'dummy-template' => 'DummyTemplate'
        ]);
    }

    function it_should_return_context()
    {
        $this->context(['heder-menu' => 'Header Menu'])->shouldReturn(['heder-menu' => 'Header Menu']);
    }
}
