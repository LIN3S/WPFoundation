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
 * Interface of menus class. This interface forces to register all the menus.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface MenusInterface
{
    /**
     * Registers all the menus.
     * It's a callback of Wordpress internal "register_nav_menus" method.
     */
    public function menus();
}
