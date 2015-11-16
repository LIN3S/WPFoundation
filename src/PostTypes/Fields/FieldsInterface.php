<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\WPFoundation\PostTypes\Fields;

/**
 * Interface of the base fields. This interface forces to implement some
 * useful methods related with custom fields class, improving the consistency.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface FieldsInterface
{
    /**
     * Joins fields created in the "fields" method with the custom post type class.
     *
     * @return mixed
     */
    public static function connector();
}
