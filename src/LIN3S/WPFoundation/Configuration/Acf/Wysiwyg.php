<?php

/*
 * * This file is part of the WPFoundation library.
 *  *
 *  * Copyright (c) 2015-2016 LIN3S <info@lin3s.com>
 *  *
 *  * For the full copyright and license information, please view the LICENSE
 *  * file that was distributed with this source code.
 */

namespace LIN3S\WPFoundation\Configuration\Acf;

/**
 * Custom ACF Wysiwyg class adding some useful features.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Jon Torrado <jontorrado@gmail.com>
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
        $this->toolbars = $toolbars;
        add_filter('acf/fields/wysiwyg/toolbars', [$this, 'toolbars']);
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
        return array_merge($toolbars, $this->toolbars);
    }
}
