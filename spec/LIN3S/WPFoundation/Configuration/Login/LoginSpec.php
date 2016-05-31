<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-2016 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\LIN3S\WPFoundation\Configuration\Login;

use fixtures\LIN3S\WPFoundation\Login;
use LIN3S\WPFoundation\Configuration\Login\Login as BaseLogin;
use LIN3S\WPFoundation\Configuration\Login\LoginInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Spec of Login class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class LoginSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf(Login::class);
    }

    function it_extends_assets()
    {
        $this->shouldHaveType(BaseLogin::class);
    }

    function it_implements_login_interface()
    {
        $this->shouldImplement(LoginInterface::class);
    }

    function it_errors()
    {
        $this->errors();
    }

    function it_message()
    {
        $this->message();
    }

    function it_title()
    {
        $this->title()->shouldReturn('WordPress Standard');
    }

    function it_url()
    {
        $this->url()->shouldReturn('http://wordpress-standard');
    }
}
