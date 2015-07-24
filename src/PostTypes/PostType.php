<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\WPFoundation\PostTypes;

/**
 * Abstract class of base post type that implements the interface.
 * This class avoids the redundant task of create the same PostType constructor.
 * Also, it comes with basic implementation of "permalink" method.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Gorka Laucirica <gorka.lauzirika@gmail.com>
 */
abstract class PostType implements PostTypeInterface
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        add_action('init', [$this, 'postType']);
        add_action('init', [$this, 'taxonomyType']);
        add_action('init', [$this, 'fields'], 20);

        add_filter('post_type_link', [$this, 'permalink'], 1, 2);
    }

    /**
     * {@inheritdoc}
     */
    public function permalink($permalink, $id = 0)
    {
        return $permalink;
    }

    /**
     * {@inheritdoc}
     */
    public function fields()
    {
    }

    /**
     * {@inheritdoc}
     */
    public static function serialize($postTypes)
    {
        return $postTypes;
    }
}
