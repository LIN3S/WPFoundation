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
 * Login interface that offers a set of
 * methods to customize the WordPress login page.
 *
 * @author Jon Torrado <jontorrado@gmail.com>
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface LoginInterface
{
    /**
     * Gets the logo directory path.
     *
     * @returns string
     */
    public function logoPath();

    /**
     * Customizes the error messages.
     */
    public function errors();

    /**
     * Customizes the logo.
     */
    public function logo();

    /**
     * Customizes the login message.
     */
    public function message();

    /**
     * Customizes the login title.
     */
    public function title();

    /**
     * Customizes the home url of login page.
     */
    public function url();
}
