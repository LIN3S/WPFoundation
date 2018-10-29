<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\LIN3S\WPFoundation\PostTypes\Fields;

use LIN3S\WordPressPhpSpecBridge\ObjectBehavior;
use LIN3S\WPFoundation\PostTypes\Fields\Components\FieldComponentInterface;
use LIN3S\WPFoundation\PostTypes\Fields\PostTypeAndTemplateFieldConnector;

/**
 * Spec of Fields class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class FieldsSpec extends ObjectBehavior
{
    function it_extends_fields()
    {
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
        $this->beAnInstanceOf('fixtures\LIN3S\WPFoundation\Fields');
        $this->connector()->shouldReturn([
            [
                [
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => 'post',
                ],
            ],
        ]);
    }

    function it_should_be_add_screen_attributes()
    {
        $this->addScreenAttributes();
    }

    function it_should_be_remove_screen_attributes()
    {
        $this->removeScreenAttributes();
    }

    function it_should_initialize_fields_with_name_from_connector(
        FieldComponentInterface $component,
        PostTypeAndTemplateFieldConnector $connector
    ) {
        $connector->connector()->shouldBeCalled()->willReturn([]);
        $connector->name()->shouldBeCalled()->willReturn('name');
        $component->init('name', [])->shouldBeCalled();

        $this->beConstructedWith([
            $component
        ], $connector);

        $this->shouldHaveType('LIN3S\WPFoundation\PostTypes\Fields\Fields');

    }
}
