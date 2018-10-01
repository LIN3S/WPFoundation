<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

use LIN3S\WPFoundation\Translations;
use Twig\Environment;
use Twig\TwigFunction;

/**
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class TranslatorTwigFunction
{
    public function __construct()
    {
        add_action('twig_apply_filters', function (Environment $twig) {
            $twig->addFunction(
                new TwigFunction('trans', function ($key) {
                    return Translations::trans($key);
                })
            );

            return $twig;
        });
    }
}
