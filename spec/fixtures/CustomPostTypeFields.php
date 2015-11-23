<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace fixtures\LIN3S\WPFoundation;

use LIN3S\WPFoundation\PostTypes\Fields\CustomPostTypeFields as BaseCustomPostTypeFields;

/**
 * Dummy implementation of custom post type fields class for fixture purposes.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class CustomPostTypeFields extends BaseCustomPostTypeFields
{
    /**
     * {@inheritdoc}
     */
    protected $name = 'custom_post_type';

    /**
     * {@inheritdoc}
     */
    public function components()
    {
        return [];
    }
}
