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

/**
 * Interface of the translations.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface TranslationsInterface
{
    /**
     * Returns the translations array.
     *
     * @return array
     */
    public function translations();

    /**
     * Static method that works like alias of translation Twig function into the PHP code.
     *
     * @param string $key The key of translations array
     *
     * @return string
     */
    public static function trans($key);
}
