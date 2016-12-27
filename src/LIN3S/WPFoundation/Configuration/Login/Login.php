<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-2016 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\WPFoundation\Configuration\Login;

/**
 * Base class that offers some method to customize easily WordPress login page.
 *
 * @author Jon Torrado <jontorrado@gmail.com>
 * @author Beñat Espiña <benatespina@gmail.com>
 */
abstract class Login implements LoginInterface
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        add_filter('login_errors', [$this, 'errors']);
        add_action('login_enqueue_scripts', [$this, 'logo']);
        add_filter('login_message', [$this, 'message']);
        add_filter('login_headertitle', [$this, 'title']);
        add_filter('login_headerurl', [$this, 'url']);
    }

    /**
     * {@inheritdoc}
     */
    public function errors()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function logo()
    {
        $logoPath = $this->logoPath();

        echo <<<EOL
<style type="text/css">
    #login h1 a, .login h1 a {
        background-image: url($logoPath);
        background-position: center;
        margin: 0 auto;
        width: 100px;
    };
    #loginform {
        margin-top: 0;
    }
</style>
EOL;
    }

    /**
     * {@inheritdoc}
     */
    public function message()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function title()
    {
        return get_bloginfo();
    }

    /**
     * {@inheritdoc}
     */
    public function url()
    {
        return home_url();
    }
}
