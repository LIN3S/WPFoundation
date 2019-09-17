<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-2016 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\WPFoundation\Configuration\Optimization;

class AssetsCleanup
{
    public function __construct()
    {
        add_action('wp_default_scripts', [$this, 'dequeueJQueryMigrate']);

        if (defined('ICL_LANGUAGE_CODE')) {
            // DO NOT LOAD WPML LANG SWITCHER CSS
            define('ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true);
            add_action('wp_head', [$this, 'dequeueSitepressJs'], 11);
        }
    }

    public function dequeueJQueryMigrate($scripts)
    {
        if (!is_admin() && !empty($scripts->registered['jquery'])) {
            $jquery_dependencies = $scripts->registered['jquery']->deps;
            $scripts->registered['jquery']->deps = array_diff($jquery_dependencies, ['jquery-migrate']);
        }
    }

    public function dequeueSitepressJs()
    {
        wp_dequeue_script('sitepress');
        wp_deregister_script('sitepress');
    }
}
