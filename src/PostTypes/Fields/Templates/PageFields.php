<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\WPFoundation\PostTypes\Fields\Templates;

use LIN3S\WPFoundation\PostTypes\Fields\Fields;

/**
 * Abstract page fields class that extends the fields basic
 * behaviour, implementing the "connector" and "removeScreenAttributes"
 * methods with the common use case.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
abstract class PageFields extends Fields
{
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
                    'value'    => 'page',
                ],
                [
                    'param'    => 'page_template',
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
        remove_post_type_support('page', 'comments');
        remove_post_type_support('page', 'custom-fields');
        remove_post_type_support('page', 'editor');
    }
}
