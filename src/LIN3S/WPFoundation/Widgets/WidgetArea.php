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

namespace LIN3S\WPFoundation\Widgets;

/**
 * @author Beñat Espiña <benatespina@gmail.com>
 */
abstract class WidgetArea
{
    abstract public function registerSidebar() : void;

    public function __construct()
    {
        add_action('widgets_init', [$this, 'registerSidebar']);
    }
}
