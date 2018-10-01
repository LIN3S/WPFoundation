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
 */
abstract class TaxonomyOptions
{
/*     @type array         $labels                An array of labels for this taxonomy. By default, Tag labels are
*                                                used for non-hierarchical taxonomies, and Category labels are used
*                                                for hierarchical taxonomies. See accepted values in
*                                                get_taxonomy_labels(). Default empty array.
*     @type string        $description           A short descriptive summary of what the taxonomy is for. Default empty.
*     @type bool          $public                Whether a taxonomy is intended for use publicly either via
 *                                                the admin interface or by front-end users. The default settings
 *                                                of `$publicly_queryable`, `$show_ui`, and `$show_in_nav_menus`
 *                                                are inherited from `$public`.
 *     @type bool          $publicly_queryable    Whether the taxonomy is publicly queryable.
 *                                                If not set, the default is inherited from `$public`
 *     @type bool          $hierarchical          Whether the taxonomy is hierarchical. Default false.
 *     @type bool          $show_ui               Whether to generate and allow a UI for managing terms in this taxonomy in
 *                                                the admin. If not set, the default is inherited from `$public`
 *                                                (default true).
 *     @type bool          $show_in_menu          Whether to show the taxonomy in the admin menu. If true, the taxonomy is
 *                                                shown as a submenu of the object type menu. If false, no menu is shown.
 *                                                `$show_ui` must be true. If not set, default is inherited from `$show_ui`
 *                                                (default true).
 *     @type bool          $show_in_nav_menus     Makes this taxonomy available for selection in navigation menus. If not
 *                                                set, the default is inherited from `$public` (default true).
 *     @type bool          $show_in_rest          Whether to include the taxonomy in the REST API.
 *     @type string        $rest_base             To change the base url of REST API route. Default is $taxonomy.
 *     @type string        $rest_controller_class REST API Controller class name. Default is 'WP_REST_Terms_Controller'.
 *     @type bool          $show_tagcloud         Whether to list the taxonomy in the Tag Cloud Widget controls. If not set,
 *                                                the default is inherited from `$show_ui` (default true).
 *     @type bool          $show_in_quick_edit    Whether to show the taxonomy in the quick/bulk edit panel. It not set,
 *                                                the default is inherited from `$show_ui` (default true).
 *     @type bool          $show_admin_column     Whether to display a column for the taxonomy on its post type listing
 *                                                screens. Default false.
 *     @type bool|callable $meta_box_cb           Provide a callback function for the meta box display. If not set,
 *                                                post_categories_meta_box() is used for hierarchical taxonomies, and
 *                                                post_tags_meta_box() is used for non-hierarchical. If false, no meta
 *                                                box is shown.
 *     @type array         $capabilities {
 *         Array of capabilities for this taxonomy.
 *
 *         @type string $manage_terms Default 'manage_categories'.
 *         @type string $edit_terms   Default 'manage_categories'.
 *         @type string $delete_terms Default 'manage_categories'.
 *         @type string $assign_terms Default 'edit_posts'.
 *     }
*     @type bool|array    $rewrite {
 *         Triggers the handling of rewrites for this taxonomy. Default true, using $taxonomy as slug. To prevent
*         rewrite, set to false. To specify rewrite rules, an array can be passed with any of these keys:
 *
 *         @type string $slug         Customize the permastruct slug. Default `$taxonomy` key.
 *         @type bool   $with_front   Should the permastruct be prepended with WP_Rewrite::$front. Default true.
 *         @type bool   $hierarchical Either hierarchical rewrite tag or not. Default false.
 *         @type int    $ep_mask      Assign an endpoint mask. Default `EP_NONE`.
 *     }
 *     @type string        $query_var             Sets the query var key for this taxonomy. Default `$taxonomy` key. If
 *                                                false, a taxonomy cannot be loaded at `?{query_var}={term_slug}`. If a
*                                                string, the query `?{query_var}={term_slug}` will be valid.
 *     @type callable      $update_count_callback Works much like a hook, in that it will be called when the count is
*                                                updated. Default _update_post_term_count() for taxonomies attached
*                                                to post types, which confirms that the objects are published before
*                                                counting them. Default _update_generic_term_count() for taxonomies
*                                                attached to other object types, such as users.
 *     @type bool          $_builtin
 */
}
