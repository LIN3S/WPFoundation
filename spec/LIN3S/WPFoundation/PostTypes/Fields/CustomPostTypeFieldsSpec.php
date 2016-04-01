<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-2016 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\LIN3S\WPFoundation\PostTypes\Fields;

use LIN3S\WordPressPhpSpecBridge\ObjectBehavior;

/**
 * Spec of custom post type fields class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class CustomPostTypeFieldsSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('fixtures\LIN3S\WPFoundation\CustomPostTypeFields');
    }

    function it_extends_fields()
    {
        $this->shouldHaveType('LIN3S\WPFoundation\PostTypes\Fields\CustomPostTypeFields');
        $this->shouldHaveType('LIN3S\WPFoundation\PostTypes\Fields\Fields');
    }

    function it_implements_fields_interface()
    {
        $this->shouldHaveType('LIN3S\WPFoundation\PostTypes\Fields\FieldsInterface');
    }

    function it_should_be_components()
    {
        $this->components()->shouldBeArray();
    }

    function it_should_connector()
    {
        $this->connector()->shouldReturn([
            [
                [
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => 'custom_post_type',
                ],
            ],
        ]);
    }

    function it_should_be_remove_screen_attributes()
    {
        $this->removeScreenAttributes();
    }
}
