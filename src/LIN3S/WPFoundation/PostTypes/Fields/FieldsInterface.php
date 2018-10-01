<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\WPFoundation\PostTypes\Fields;

/**
 * Interface of the base fields. This interface forces to implement some
 * useful methods related with custom fields class, improving the consistency.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 *
 * @deprecated since version 1.7, will be removed in 2.0. Use constructor in Fields
 */
interface FieldsInterface
{
    /**
     * Builds the post type fields.
     *
     * @deprecated since version 1.7, will be made private in 2.0. Use constructor to pass the components and post type
     * names
     */
    public function fields();

    /**
     * Returns array that contains the fully qualified namespaces of the field components.
     *
     * @deprecated since version 1.7, will be made private in 2.0. Use constructor to pass the components and post type
     * names
     *
     * @return array
     */
    public function components();

    /**
     * Joins fields created in the "fields" method with the custom post type class.
     *
     * @deprecated since version 1.7, will be made private in 2.0. Use constructor to pass the components and post type
     * names
     * @return mixed
     */
    public function connector();

    /**
     * Adds the screen attributes from admin post type view calling
     * the WordPress internal "add_post_type_support" method.
     *
     * @deprecated since version 1.7, will be made private in 2.0. Use PostType constructor instead.
     */
    public function addScreenAttributes();

    /**
     * Removes the screen attributes from admin post type view calling
     * the WordPress internal "remove_post_type_support" method.
     *
     * @deprecated since version 1.7, will be made private in 2.0.  Use PostType constructor instead.
     */
    public function removeScreenAttributes();
}
