<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-2016 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace fixtures\LIN3S\WPFoundation;

use LIN3S\WPFoundation\Configuration\Login\Login as BaseLogin;

/**
 * Dummy implementation of Login class for fixture purposes.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class Login extends BaseLogin
{
    /**
     * {@inheritdoc}
     */
    public function logoPath()
    {
        return 'dummy/logo/base/path/directory';
    }
}
