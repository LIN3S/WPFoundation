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
 * Interface of the base post type. This interface forces to implement some
 * useful methods related with custom post type class, improving the consistency.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Gorka Laucirica <gorka.lauzirika@gmail.com>
 */
interface PostTypeInterface
{
    /**
     * Registers required fields by this post type.
     */
    public function fields();

    /**
     * Sometimes, the custom post type also needs has a custom permalink.
     * This is the responsibility of this method. It's a callback of "post_type_link" filter
     * that offers manipulate the creation of custom post type permalink.
     *
     * @param string $permalink The permalink itself
     * @param int    $id        The id, by default is 0
     *
     * @return string Customized permalink
     */
    public function permalink($permalink, $id = 0);

    /**
     * Builds the custom post type calling the WordPress internal "register_post_type" method.
     */
    public function postType();

    /**
     * Removes the screen attributes from admin pos type view calling
     * the WordPress internal "remove_post_type_support" method.
     */
    public function removeScreenAttributes();

    /**
     * Registers required rewrite rules by this post type.
     */
    public function rewriteRules();

    /**
     * Static method that simplifies the process of getting all data from given post. The given
     * post can be an object but also, can be an array of posts. It's very useful to encapsulate all
     * the logic about get the simple fields data without polluting the controller.
     *
     * @param array|Object $postTypes The post type or the post types given because can be an object or an array
     *
     * @return array|Object Serialized given post type or post types
     */
    public static function serialize($postTypes);

    /**
     * Like custom post types, sometimes, the taxonomy also needs has a custom permalink.
     * This is the responsibility of this method. It's a callback of "term_link" filter
     * that offers manipulate the creation of taxonomy permalink.
     *
     * @param string $url      The url
     * @param string $term     The term
     *
     * @return string Customized url
     */
    public function taxonomyPermalink($url, $term);

    /**
     * Only if the post type has a custom taxonomy type too, this method builds
     * the taxonomy type calling the WordPress internal "register_taxonomy" method.
     */
    public function taxonomyType();
}
