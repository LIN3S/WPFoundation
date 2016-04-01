<?php

/*
 * * This file is part of the WPFoundation library.
 *  *
 *  * Copyright (c) 2015-2016 LIN3S <info@lin3s.com>
 *  *
 *  * For the full copyright and license information, please view the LICENSE
 *  * file that was distributed with this source code.
 */

namespace LIN3S\WPFoundation\Widgets\Areas;

/**
 * Abstract class of base widget area that implements the interface.
 * This class avoids the redundant task of create the same WidgetArea constructor.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
abstract class WidgetArea implements WidgetAreaInterface
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        add_action('widgets_init', [$this, 'widgetArea']);
    }
}
