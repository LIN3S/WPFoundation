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

use LIN3S\WPFoundation\PostTypes\Fields\Fields as BaseFields;

/**
 * Dummy implementation of Fields class for fixture purposes.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class Fields extends BaseFields
{
    /**
     * {@inheritdoc}
     */
    public function fields()
    {
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
                    'value'    => 'post',
                ],
            ],
        ];
    }
}
