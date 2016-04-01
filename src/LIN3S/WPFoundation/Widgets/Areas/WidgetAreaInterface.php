<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-2016 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\WPFoundation\Widgets\Areas;

/**
 * Interface of the base widget area. This interface forces to implement some
 * useful methods related with widget area class, improving the consistency.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface WidgetAreaInterface
{
    /**
     * Registers the widget calling the Wordpress internal "register_sidebar" method.
     */
    public function widgetArea();
}
