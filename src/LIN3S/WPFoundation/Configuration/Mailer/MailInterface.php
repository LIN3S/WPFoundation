<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\WPFoundation\Configuration\Mailer;

/**
 * Interface of mail class. This interface forces to register all the menus.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 *
 * @deprecated Will be removed in 2.0, use wp_mail() directly
 */
interface MailInterface
{
    /**
     * Sends the email with the Mailer configuration.
     * It's very oriented to use with WordPress "wp_mail" internal method.
     *
     * @param mixed $request The request
     */
    public static function mail($request);
}
