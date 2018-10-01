<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-present LIN3S <info@lin3s.com>
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
 * @author Gorka Laucirica <gorkalaucirica@gmail.com>
 */
abstract class FieldComponent
{
    /**
     * {@inheritdoc}
     */
    public static function register($aName, $aConnector)
    {
        if (method_exists(static::class, 'definition')) {
            $definition = static::definition($aName);
            $definition['location'] = $aConnector;
            acf_add_local_field_group($definition);
        } else {
            //@deprecated Will be removed in 2.0, and this class will implement FieldComponentInterface
            return new static($aName, $aConnector);
        }
    }

    /**
     * Constructor.
     *
     * @deprecated since version 1.4, will be removed in 2.0. Implement register() instead
     */
    protected function __construct()
    {
    }
}
