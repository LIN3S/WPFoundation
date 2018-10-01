<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace LIN3S\WPFoundation\PostTypes;

/**
 * @author Beñat Espiña <benatespina@gmail.com>
 */
abstract class RewriteRules
{
    abstract public function addRewriteRules() : void;

    abstract public function addRewriteTags() : void;

    abstract public function templateInclude($template) : string;

    public function __construct()
    {
        $this->rewriteRules();
        $this->rewriteTags();
        add_action('template_include', [$this, 'templateInclude']);
    }
}
