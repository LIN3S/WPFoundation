<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\WPFoundation\Configuration\Assets;

/**
 * Interface of assets class. This interface forces to instantiate all the
 * theme classes, to add all the templates and initialize the context.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface AssetsInterface
{
    const ASSETS_JS = 'assets/js';
    const BUILD_JS = 'build/js';
    const CSS = 'build/css';
    const VENDOR = 'assets/vendor';

    /**
     * Registers all the scripts and stylesheet files.
     * It's a callback of Wordpress internal "wp_enqueue_scripts" method.
     */
    public function assets();
}
