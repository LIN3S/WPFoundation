<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-2016 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\WPFoundation\PostTypes\RewriteRules;

/**
 * Abstract class of base rewrite rules that implements the interface.
 * This class avoids the redundant task of create the same RewriteRules constructor.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
abstract class RewriteRules implements RewriteRulesInterface
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->rewriteRules();
        $this->rewriteTags();
        add_action('template_include', [$this, 'templateInclude']);
    }
}
