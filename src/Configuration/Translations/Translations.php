<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\WPFoundation\Configuration\Translations;

use Twig_SimpleFunction;

/**
 * Abstract class of translations that implements the interface.
 *
 * This class centralizes in an easy way all the translations,
 * including the filter for Twig template engine.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
abstract class Translations implements TranslationsInterface
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        add_action('twig_apply_filters', function ($twig) {
            $twig->addFunction(new Twig_SimpleFunction('trans', [$this, 'translationOfKey']));

            return $twig;
        });
    }

    /**
     * {@inheritdoc}
     */
    public static function trans($key)
    {
        return self::translationOfKey($key);
    }

    /**
     * Gets the translation of key given.
     *
     * @param string $key The key of translations array
     *
     * @return string
     */
    private function translationOfKey($key)
    {
        return true === array_key_exists($key, $this->translations()) ? $this->translations()[$key] : '';
    }
}
