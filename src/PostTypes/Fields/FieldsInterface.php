<?php

/*
 * This file is part of the WP Helpers library.
 *
 * Copyright (c) 2015 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\WPHelpers\PostTypes\Fields;

/**
 * Interface of the base fields. This interface forces to implement some
 * useful methods related with custom fields class, improving the consistency.
 * It's very oriented to use with simple fields library.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface FieldsInterface
{
    /**
     * Builds the fields calling the Simple fields' "simple_fields_register_field_group" method.
     */
    public function fields();

    /**
     * Creates the fields connector and joins with the custom post type class.
     */
    public function connector();
}
