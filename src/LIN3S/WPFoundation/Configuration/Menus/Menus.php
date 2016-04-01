<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-2016 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\WPFoundation\Configuration\Menus;

/**
 * Abstract class of menus class that implements the interface.
 * This class avoids the use of callbacks in the constructor.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
abstract class Menus implements MenusInterface
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        add_action('init', [$this, 'menus']);
    }
}
