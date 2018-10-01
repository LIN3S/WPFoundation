<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\WPFoundation\Widgets;

/**
 * Interface of the base widget. This interface forces to implement some
 * useful methods related with widget class, improving the consistency.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface WidgetInterface
{
    /**
     * Gets the widget id base.
     *
     * @return mixed|string
     */
    public function name();

    /**
     * Gets the widget number.
     *
     * @return bool|int
     */
    public function number();

    /**
     * Registers the widget calling the Wordpress internal "register_widget" method.
     */
    public function register();
}
