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
abstract class Login implements LoginInterface
{
    public function __construct()
    {
        add_filter('login_errors', [$this, 'errors']);
        add_action('login_enqueue_scripts', [$this, 'logo']);
        add_filter('login_message', [$this, 'message']);
        add_filter('login_headertitle', [$this, 'title']);
        add_filter('login_headerurl', [$this, 'url']);
    }

    public function errors() : void
    {
    }

    public function logo() : void
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

    public function message() : void
    {
    }

    public function title() : string
    {
        return get_bloginfo();
    }

    public function url() : string
    {
        return home_url();
    }
}
