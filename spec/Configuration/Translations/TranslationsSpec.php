<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\LIN3S\WPFoundation\Configuration\Translations;

use LIN3S\WordPressPhpSpecBridge\ObjectBehavior;
use Prophecy\Argument;

/**
 * Spec of Translations class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class TranslationsSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('fixtures\LIN3S\WPFoundation\Translations');
    }

    function it_extends_translations()
    {
        $this->shouldHaveType('LIN3S\WPFoundation\Configuration\Translations\Translations');
    }

    function it_implements_translations_interface()
    {
        $this->shouldHaveType('LIN3S\WPFoundation\Configuration\Translations\TranslationsInterface');
    }

    function it_translations_returns_array()
    {
        $this->translations()->shouldBeArray();
    }
}
