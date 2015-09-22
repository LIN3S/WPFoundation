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
    function it_is_initializable()
    {
        $this->shouldHaveType('LIN3S\WPFoundation\Configuration\Translations\Translations');
    }

    function it_implements_translations_interface()
    {
        $this->shouldHaveType('LIN3S\WPFoundation\Configuration\Translations\TranslationsInterface');
    }

    function it_trans_when_the_WPML_is_not_installed()
    {
        $this->trans('dummy-key')->shouldReturn('dummy-key');
    }

    function it_trans_returns_translation()
    {
        include_once __DIR__ . '/../../../vendor/lin3s/wp-phpspec-brigde/src/Wpml.php';

        $this->trans('dummy-key')->shouldReturn('translation of dummy-key');
    }
}
