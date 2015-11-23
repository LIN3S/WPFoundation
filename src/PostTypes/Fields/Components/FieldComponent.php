<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\WPFoundation\PostTypes\Fields\Components;

/**
 * Abstract class of base custom fields components.
 * This class enforces that all the field components need to
 * construct by register method.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
abstract class FieldComponent
{
    /**
     * Static naming constructor.
     *
     * @param string $aName      The name
     * @param mixed  $aConnector The connector
     */
    public static function register($aName, $aConnector)
    {
        new static($aName, $aConnector);
    }

    /**
     * Constructor.
     */
    protected function __construct()
    {
    }
}
