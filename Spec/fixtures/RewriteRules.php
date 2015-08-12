<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace fixtures\LIN3S\WPFoundation;

use LIN3S\WPFoundation\PostTypes\RewriteRules\RewriteRules as BaseRewriteRules;

/**
 * Dummy implementation of RewriteRules class for fixture purposes.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class RewriteRules extends BaseRewriteRules
{
    /**
     * {@inheritdoc}
     */
    public function rewriteRules()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function rewriteTags()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function templateInclude($template)
    {
        return $template;
    }
}
