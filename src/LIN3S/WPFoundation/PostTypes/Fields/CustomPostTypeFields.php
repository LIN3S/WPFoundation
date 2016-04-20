<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-2016 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\WPFoundation\PostTypes\Fields;

/**
 * Abstract custom post type fields class that extends the fields basic
 * behaviour, implementing the "connector" and "removeScreenAttributes"
 * methods with the common use case.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
abstract class CustomPostTypeFields extends Fields
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        parent::__construct();

        add_action('admin_init', [$this, 'addScreenAttributes']);
        add_action('admin_init', [$this, 'removeScreenAttributes']);
    }

    /**
     * {@inheritdoc}
     */
    public function connector()
    {
        return [
            [
                [
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => $this->name,
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function removeScreenAttributes()
    {
        remove_post_type_support($this->name, 'comments');
        remove_post_type_support($this->name, 'custom-fields');
    }
}
