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
 * @author GorkaLaucirica <gorkalaucirica@gmail.com>
 */
interface FieldComponentInterface
{
    /**
     * Static naming constructor.
     *
     * @param string $aName      The name
     * @param mixed  $aConnector The connector
     */
    public static function register($aName, $aConnector);

    /**
     * Static component definition
     *
     * @param string $aName The name of the field
     *
     * @return array with the required ACF field config
     */
    public static function definition($aName);

}
