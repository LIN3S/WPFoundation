<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-2016 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\LIN3S\WPFoundation\Configuration\Mailer;

use LIN3S\WordPressPhpSpecBridge\ObjectBehavior;

/**
 * Spec of Mailer class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class LocalMailerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('LIN3S\WPFoundation\Configuration\Mailer\LocalMailer');
    }
}
