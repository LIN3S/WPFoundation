<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-present LIN3S <info@lin3s.com>
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
class Menus implements MenusInterface
{
    private $menus;

    /**
     * Constructor.
     *
     * @param array $menus
     */
    public function __construct($menus = [])
    {
        $this->menus = $menus;

        add_action('init', [$this, 'menus']);
    }

    /**
     * @inheritdoc
     */
    public function menus()
    {
        register_nav_menus($this->menus);
    }
}
