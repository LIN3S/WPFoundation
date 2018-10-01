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

namespace LIN3S\WPFoundation\PostTypes;

/**
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Gorka Laucirica <gorka.lauzirika@gmail.com>
 */
abstract class PostType
{
    abstract public function name() : string;

    public function __construct()
    {
        add_action('init', [$this, 'registerFields'], 20);
        add_action('init', [$this, 'rewriteRules'], 20);
        add_filter('post_type_link', [$this, 'permalink'], 1, 2);
    }

    public function registerFields() : void
    {
    }

    public function permalink($permalink, $id = 0)
    {
        return $permalink;
    }

    public function rewriteRules()
    {
    }

    final public static function serialize($postTypes)
    {
        if (is_array($postTypes)) {
            foreach ($postTypes as $key => $postType) {
                $postTypes[$key] = static::singleSerialize($postType);
            }

            return $postTypes;
        }
        $postType = $postTypes;

        return static::singleSerialize($postType);
    }

    protected static function singleSerialize($postType)
    {
        return $postType;
    }
}
