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
 * Class that configures the parameters used by "wp_mail".
 *
 * Define the following global variables in your "wp-config-custom.php" file:
 *
 *    MAILER_HOST: Url to the host.
 *    MAILER_PORT: The port used by SMTP.
 *    MAILER_USERNAME: The username used to send the email.
 *    MAILER_PASSWORD: The password required to send the email.
 *    MAILER_FROM: The email address that will be shown to the receiver.
 *    MAILER_FROM_NAME: The name that will be shown to the receiver.
 *
 * Remember to add this class to your theme constructor.
 *
 * @author Gorka Laucirica <gorka.lauzirika@gmail.com>
 */
final class Mailer
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
        $phpMailer->isSMTP();
        $phpMailer->Host = MAILER_HOST;
        $phpMailer->SMTPAuth = true;
        $phpMailer->Port = MAILER_PORT;
        $phpMailer->Username = MAILER_USERNAME;
        $phpMailer->Password = MAILER_PASSWORD;
        $phpMailer->SMTPSecure = 'tls';

        $phpMailer->From = MAILER_FROM;
        $phpMailer->FromName = MAILER_FROM_NAME;
    }
}
