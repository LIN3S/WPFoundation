<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\WPFoundation\Configuration\Acf;

/**
 * Interface of ACF class. This interface forces to
 * implement the API of WPFoundation ACF bridge.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface AcfInterface
{
    /**
     * Registers and customize the ACF WYSWYG toolbars.
     *
     * @return array
     */
    public function wyswygToolbars();
}
