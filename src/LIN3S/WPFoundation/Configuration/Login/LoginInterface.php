<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\WPFoundation\Configuration\Login;

/**
 * @author Jon Torrado <jontorrado@gmail.com>
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface LoginInterface
{
    public function logoPath() : string;

    public function errors() : void;

    public function logo() : void;

    public function message() : void;

    public function title() : string;

    public function url() : string;
}
