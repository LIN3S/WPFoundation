<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-2016 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\LIN3S\WPFoundation\Configuration\Acf;

use fixtures\LIN3S\WPFoundation\Acf;
use LIN3S\WPFoundation\Configuration\Acf\Acf as BaseAcf;
use LIN3S\WPFoundation\Configuration\Acf\AcfInterface;
use PhpSpec\ObjectBehavior;

/**
 * Custom ACF Wysiwyg class adding some useful features.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class AcfSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf(Acf::class);
    }

    function it_extends_base_acf()
    {
        $this->shouldHaveType(BaseAcf::class);
    }

    function it_implements_acf_interface()
    {
        $this->shouldHaveType(AcfInterface::class);
    }

    function its_wyswyg_toolbars()
    {
        $this->wyswygToolbars()->shouldReturn([
            'lin3s' => [
                1 => [
                    'bold', 'italic', 'bullist', 'numlist', 'link', 'unlink',
                ],
            ],
        ]);
    }
}
