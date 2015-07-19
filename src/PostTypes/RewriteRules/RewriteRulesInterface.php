<?php

/*
 * This file is part of the WP Helpers library.
 *
 * Copyright (c) 2015 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\WPHelpers\PostTypes\RewriteRules;

/**
 * Interface of the base rewrite rules. This interface forces to implement some
 * useful methods related with custom rewrite rules class, improving the consistency.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface RewriteRulesInterface
{
    /**
     * Adds the rewrite rules calling the Wordpress internal "add_rewrite_rule" method.
     */
    public function rewriteRules();

    /**
     * Adds the rewrite tags calling the Wordpress internal "add_rewrite_tag" method.
     */
    public function rewriteTags();

    /**
     * Callback of "template_include" action that offers
     * manipulate which controller action should be called.
     *
     * @param string $template The default given template
     *
     * @return callable The controller action that should be called
     */
    public function templateInclude($template);
}
