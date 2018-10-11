<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-present LIN3S <info@lin3s.com>
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
class PostType implements PostTypeInterface
{
    private $name;
    private $options;

    /**
     * Constructor.
     *
     * @param string $name
     * @param array $options
     */
    public function __construct($name = null, $options = [])
    {
        $this->name = $name;
        $this->options = $options;

        add_action('init', [$this, 'postType']);
        add_action('init', [$this, 'taxonomyType']);
        add_action('init', [$this, 'fields'], 20);
        add_action('init', [$this, 'rewriteRules'], 20);

        add_filter('post_type_link', [$this, 'permalink'], 1, 2);
        add_filter('term_link', [$this, 'taxonomyPermalink'], 1, 2);
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
    public function permalink($permalink, $id = 0)
    {
        return $permalink;
    }

    /**
     * {@inheritdoc}
     */
    public function rewriteRules()
    {
    }

    /**
     * {@inheritdoc}
     */
    public static function serialize($postTypes)
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

    /**
     * {@inheritdoc}
     */
    public function taxonomyPermalink($url, $term)
    {
        return $url;
    }

    /**
     * Static method that simplifies the process of getting all data
     * from given post. This method is called by the main serialize method.
     *
     * @param object $postType The post type
     *
     * @deprecated since version 1.7, will be removed in 2.0. Create a custom serializer class.
     *
     * @return object Serialized given post type
     */
    protected static function singleSerialize($postType)
    {
        return $postType;
    }

    /**
     * {@inheritdoc}
     */
    public function postType()
    {
        if ($this->name !== null && $this->options !== null) {
            register_post_type($this->name, $this->options);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function taxonomyType()
    {
    }
}
