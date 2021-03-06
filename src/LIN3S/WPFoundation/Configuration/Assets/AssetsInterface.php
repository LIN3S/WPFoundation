<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\WPFoundation\Configuration\Assets;

/**
 * Interface of assets class. This interface forces to register
 * all the scripts and stylesheet under assets method.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Gorka Laucirica <gorka.lauzirika@gmail.com>
 */
interface AssetsInterface
{
    const ASSETS_JS = 'assets/js';
    const BUILD_JS = 'build/js';
    const CSS = 'build/css';
    const VENDOR = 'assets/vendor';
    const NPM = '../node_modules';

    /**
     * Registers all the scripts and stylesheet files that they
     * are going to be execute when the WP_DEBUG is "true". Development mode.
     *
     * It's a callback of WordPress internal "wp_enqueue_scripts" method.
     */
//    public function developmentAssets();

    /**
     * Registers all the scripts and stylesheet files that they
     * are going to be execute when the WP_DEBUG is "false". Production mode.
     *
     * It's a callback of WordPress internal "wp_enqueue_scripts" method.
     */
//    public function productionAssets();

    /**
     * Registers all the scripts and stylesheet files used in wp-admin.
     * It's a callback of WordPress internal "admin_enqueue_scripts" method.
     */
    public function adminAssets();
}
