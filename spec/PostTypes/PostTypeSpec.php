<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\LIN3S\WPFoundation\PostTypes;

use LIN3S\WordPressPhpSpecBridge\ObjectBehavior;
use Prophecy\Argument;

/**
 * Spec of PostType class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class PostTypeSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('fixtures\LIN3S\WPFoundation\PostType');
    }

    function it_extends_post_type()
    {
        $this->shouldHaveType('LIN3S\WPFoundation\PostTypes\PostType');
    }

    function it_implements_post_type_interface()
    {
        $this->shouldHaveType('LIN3S\WPFoundation\PostTypes\PostTypeInterface');
    }

    function it_should_be_fields()
    {
        $this->fields();
    }

    function it_should_be_permalink()
    {
        $this->permalink('dummy-permalink')->shouldReturn('dummy-permalink');
    }

    function it_should_be_post_type()
    {
        $this->postType();
    }

    function it_should_be_remove_screen_attributes()
    {
        $this->removeScreenAttributes();
    }

    function it_should_be_rewrite_rules()
    {
        $this->rewriteRules();
    }

    function it_should_serialize()
    {
        $object = Argument::type('Object');

        $this->serialize($object)->shouldReturn($object);
    }

    function it_should_be_taxonomy_type()
    {
        $this->taxonomyType();
    }

    function it_should_be_taxonomy_permalink()
    {
        $this->taxonomyPermalink('dummy-taxonomy-permalink', Argument::any())->shouldReturn('dummy-taxonomy-permalink');
    }
}
