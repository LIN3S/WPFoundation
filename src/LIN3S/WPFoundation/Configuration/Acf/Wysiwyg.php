<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\WPFoundation\Configuration\Acf;

/**
 * Custom ACF Wysiwyg class adding some useful features.
 *
 * @author     Beñat Espiña <benatespina@gmail.com>
 * @author     Jon Torrado <jontorrado@gmail.com>
 *
 * @deprecated since version 1.6, will be removed in 2.0. Extend the ACF class in your project and instantiate
 *             inside your project Theme
 */
class Wysiwyg
{
    /**
     * Constructor.
     *
     * @param array $toolbars Array which contains toolbar
     */
    public function __construct(array $toolbars)
    {
    }

    /**
     * Callback method that manages the Wysiwyg toolbars.
     *
     * @param array $toolbars Array which contains the toolbars
     *
     * @return array
     */
    public function toolbars(array $toolbars)
    {
    }
}
