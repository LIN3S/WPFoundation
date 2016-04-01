<?php

/*
 * * This file is part of the WPFoundation library.
 *  *
 *  * Copyright (c) 2015-2016 LIN3S <info@lin3s.com>
 *  *
 *  * For the full copyright and license information, please view the LICENSE
 *  * file that was distributed with this source code.
 */

namespace fixtures\LIN3S\WPFoundation;

use LIN3S\WPFoundation\Configuration\Theme\Theme as BaseTheme;

/**
 * Dummy implementation of Theme class for fixture purposes.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class Theme extends BaseTheme
{
    /**
     * {@inheritdoc}
     */
    public function classes()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function templates($templates)
    {
        return array_merge($templates, ['dummy-template' => 'DummyTemplate']);
    }

    /**
     * {@inheritdoc}
     */
    public function context(array $context)
    {
        return $context;
    }
}
