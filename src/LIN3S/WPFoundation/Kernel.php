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

namespace LIN3S\WPFoundation;

/**
 * @author Beñat Espiña <benatespina@gmail.com>
 */
abstract class Kernel
{
    abstract public function registerClasses() : void;

    public function __construct()
    {
        $this->register();
        $this->xmlrpc();

        add_action('admin_head', [$this, 'adminHead']);

        add_theme_support('post-thumbnails');

        add_filter('theme_page_templates', [$this, 'templates']);
        add_filter('timber_context', [$this, 'context']);
    }

    private function register() : void
    {
        $this->registerClasses();
        new AuthorizationChecker();
        new Translator();
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
