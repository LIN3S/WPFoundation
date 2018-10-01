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

use LIN3S\WPFoundation\Configuration\Acf\Acf as BaseAcf;

/**
 * Dummy implementation of ACF class for fixture purposes.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class Acf extends BaseAcf
{
    public function wyswygToolbars()
    {
        return [
            'lin3s' => [1 => ['bold', 'italic', 'bullist', 'numlist', 'link', 'unlink']],
        ];
    }
}
