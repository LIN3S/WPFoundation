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

namespace LIN3S\WPFoundation;

/**
 * @author Beñat Espiña <benatespina@gmail.com>
 */
final class Translator
{
    private const DOMAIN = 'WP Foundation default domain';

    public static function trans(string $key) : string
    {
        if (false === function_exists('icl_t') || false === function_exists('icl_register_string')) {
            return $key;
        }

        if (empty(icl_t(self::domain(), $key))) {
            icl_register_string(self::domain(), $key, $key);

            return $key;
        }

        return icl_t(self::domain(), $key);
    }

    private static function domain() : string
    {
        return defined('TRANSLATION_DOMAIN') ? TRANSLATION_DOMAIN : self::DOMAIN;
    }
}
