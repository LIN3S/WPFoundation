<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\LIN3S\WPFoundation\Twig;

use LIN3S\WordPressPhpSpecBridge\ObjectBehavior;

/**
 * Spec of TagManagerTwig class.
 *
 * @author Gorka Laucirica <gorka.lauzirika@gmail.com>
 */
class TagManagerTwigSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('LIN3S\WPFoundation\Twig\TagManagerTwig');
    }

    function it_renders_tag_manager_container()
    {
        $this->tagManagerFunction('GTM-XXXXXX')->shouldReturn(<<<EOT
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-XXXXXX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-XXXXXX');</script>
EOT
        );
    }
}
