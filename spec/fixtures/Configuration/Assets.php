<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fixtures\LIN3S\WPFoundation\Configuration;

use LIN3S\WPFoundation\Configuration\Assets\Assets as BaseAssets;

/**
 * Dummy Assets class for testing purposes.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class Assets extends BaseAssets
{
    /**
     * {@inheritdoc}
     */
    public function assets()
    {
        $this->addStylesheet('app');
        $this->addScript('app.min', self::BUILD_JS);
    }
}
