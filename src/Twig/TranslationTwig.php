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

use LIN3S\WPFoundation\Configuration\Translations\Translations;

/**
 * Twig function to use in Twig templates that translates in an easy way the string literals:
 *
 *     {{ trans('Your awesome name') }}
 *
 * Remember to call the constructor into theme before using it.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class TranslationTwig
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        add_action('twig_apply_filters', function ($twig) {
            $twig->addFunction(new \Twig_SimpleFunction('trans', function ($key) {
                return Translations::trans($key);
            }));

            return $twig;
        });
    }
}
