<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\LIN3S\WPFoundation\Twig;

use LIN3S\WordPressPhpSpecBridge\ObjectBehavior;

/**
 * Spec of TranslationTwig class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class TranslationTwigSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('LIN3S\WPFoundation\Twig\TranslationTwig');
    }
}
