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
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Gorka Laucirica <gorka.lauzirika@gmail.com>
 */
interface AssetsInterface
{
    public const ASSETS_JS = 'assets/js';
    public const BUILD_JS = 'build/js';
    public const CSS = 'build/css';
    public const VENDOR = 'assets/vendor';
    public const NPM = '../node_modules';

    public function developmentAssets() : void;

    public function productionAssets() : void;

    public function adminAssets() : void;
}
