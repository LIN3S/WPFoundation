<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-2016 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\LIN3S\WPFoundation\PostTypes\RewriteRules;

use LIN3S\WordPressPhpSpecBridge\ObjectBehavior;

/**
 * Spec of RewriteRules class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class RewriteRulesSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('fixtures\LIN3S\WPFoundation\RewriteRules');
    }

    function it_extends_rewrite_rules()
    {
        $this->shouldHaveType('LIN3S\WPFoundation\PostTypes\RewriteRules\RewriteRules');
    }

    function it_implements_rewrite_rules_interface()
    {
        $this->shouldHaveType('LIN3S\WPFoundation\PostTypes\RewriteRules\RewriteRulesInterface');
    }

    function it_should_be_rewrite_rules()
    {
        $this->rewriteRules();
    }

    function it_should_be_rewrite_tags()
    {
        $this->rewriteTags();
    }

    function it_should_include_template()
    {
        $this->templateInclude('index')->shouldReturn('index');
    }
}
