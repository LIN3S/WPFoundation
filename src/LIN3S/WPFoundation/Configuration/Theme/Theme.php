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
 * Abstract class of theme that implements the interface.
 * This class avoids the use of callbacks in the constructor.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
abstract class Theme implements ThemeInterface
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->classes();
        $this->templateSelector();
        $this->xmlrpc();
        add_theme_support('post-thumbnails');
        add_filter('timber_context', [$this, 'context']);

        // @deprecated since version 1.6, will be removed in 2.0. Extend the ACF class in your project and instantiate
        // inside your project Theme.
        $this->acf();
    }

    /**
     * Filters the selectable templates.
     */
    private function templateSelector()
    {
        $self = $this;
        add_filter('theme_page_templates', function () use ($self) {
            return $self->templates([]);
        });
    }

    /**
     * Enables or disables XML-RPC feature.
     */
    private function xmlrpc()
    {
        $xmlrpc = !defined('XMLRPC_ENABLED') || XMLRPC_ENABLED === true
            ? '__return_true'
            : '__return_false';
        add_filter('xmlrpc_enabled', $xmlrpc);
    }

    /**
     * @deprecated since version 1.6, will be removed in 2.0. Extend the ACF class in your project and instantiate
     *             inside your project Theme
     */
    protected function acf()
    {
        $customToolbars = [
            'lin3s' => [1 => ['bold', 'italic', 'bullist', 'numlist', 'link', 'unlink']],
        ];

        add_filter('acf/fields/wysiwyg/toolbars', function (array $toolbars) use ($customToolbars) {
            return array_merge($toolbars, $customToolbars);
        });
    }
}
