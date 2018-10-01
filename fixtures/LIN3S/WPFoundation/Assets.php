<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace fixtures\LIN3S\WPFoundation;

use LIN3S\WPFoundation\Configuration\Assets\Assets as BaseAssets;

/**
 * Dummy implementation of Assets class for fixture purposes.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class Assets extends BaseAssets
{
    /**
     * {@inheritdoc}
     */
    public function productionAssets()
    {
        $this->addScript('app');
        $this->addStylesheet('app');
    }

    /**
     * {@inheritdoc}
     */
    public function developmentAssets()
    {
        $this->addScript('app');
        $this->addStylesheet('app');
    }
}
