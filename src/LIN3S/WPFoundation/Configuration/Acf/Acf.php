<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-2016 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\WPFoundation\Configuration\Acf;

/**
 * Abstract class of ACF class that implements the interface.
 * This class avoids the use of callbacks in the constructor.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Jon Torrado <jontorrado@gmail.com>
 */
abstract class Acf implements AcfInterface
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        $customToolbars = $this->wyswygToolbars();
        add_filter('acf/fields/wysiwyg/toolbars', function (array $toolbars) use ($customToolbars) {
            return array_merge($toolbars, $customToolbars);
        });
    }
}
