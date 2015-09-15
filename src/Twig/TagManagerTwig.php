<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\WPFoundation\Twig;

/**
 * Twig function to use in Twig templates that add TagManager container adding the following code:
 *
 *     {{ tagManager('GTM-XXXXXX') }}
 *
 * Remember to call the constructor before using it
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Gorka Laucirica <gorka.lauzirika@gmail.com>
 */
class TagManagerTwig
{
    public function __construct()
    {
        add_action('twig_apply_filters', [$this, 'addFilter']);
    }

    public function addFilter($twig)
    {
        $twig->addFunction(new \Twig_SimpleFunction('tagManager', [$this, 'tagManagerFunction']));

        return $twig;
    }

    public function tagManagerFunction($tagManagerId)
    {
        return <<<EOT
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=$tagManagerId"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','$tagManagerId');</script>
EOT;
    }
}
