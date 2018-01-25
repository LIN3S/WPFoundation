<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\WPFoundation\Configuration\Theme;

/**
 * @author Beñat Espiña <benatespina@gmail.com>
 */
abstract class Theme implements ThemeInterface
{
    public function __construct()
    {
        $this->classes();
        $this->xmlrpc();

        add_action('admin_head', [$this, 'adminHead']);

        add_theme_support('post-thumbnails');

        add_filter('theme_page_templates', [$this, 'templates']);
        add_filter('timber_context', [$this, 'context']);
    }

    public function context(array $context) : array
    {
        return $context;
    }

    private function xmlrpc() : void
    {
        $xmlrpc = !defined('XMLRPC_ENABLED') || XMLRPC_ENABLED === true
            ? '__return_true'
            : '__return_false';

        add_filter('xmlrpc_enabled', $xmlrpc);
    }

    protected function adminHead() : void
    {
        $this->removeOrderFromPostAttributesBox();
    }

    public function removeOrderFromPostAttributesBox() : void
    {
        echo '<style>label[for="menu_order"], input[name="menu_order"] {display:none;}</style>';
    }
}
