<?php

/*
 * This file is part of the WP Helpers library.
 *
 * Copyright (c) 2015 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\WPHelpers\Configuration\Theme;

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
        add_theme_support('post-thumbnails');
        add_filter('timber_context', [$this, 'context']);
        add_filter('template_selector_available', [$this, 'templates']);
    }
}
