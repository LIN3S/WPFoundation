<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-2016 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\WPFoundation\Configuration\Mailer;

/**
 * Class that configures the parameters used by "wp_mail" to send emails using local built in mailer.
 *
 * Define the following global variables in your "wp-config-custom.php" file:
 *
 *    MAILER_FROM: The email address that will be shown to the receiver.
 *    MAILER_FROM_NAME: The name that will be shown to the receiver.
 *
 * Remember to add this class to your theme constructor.
 *
 * @author Gorka Laucirica <gorka.lauzirika@gmail.com>
 */
class LocalMailer
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        add_action('phpmailer_init', [$this, 'mailer']);
    }

    /**
     * Configures the mailer according to the parameters in "wp-config-custom.php".
     *
     * @param object $phpMailer The PhpMailer instance
     */
    public function mailer($phpMailer)
    {
        $phpMailer->Sender = MAILER_FROM;
        $phpMailer->From = MAILER_FROM;
        $phpMailer->FromName = MAILER_FROM_NAME;
    }
}
