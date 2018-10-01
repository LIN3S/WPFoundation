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
abstract class Menus
{
    abstract public function menus() : void;

    public function __construct()
    {
        add_action('init', [$this, 'menus']);
    }
}
