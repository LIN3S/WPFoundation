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
 * @author Jon Torrado <jontorrado@gmail.com>
 */
abstract class Acf
{
    abstract public function wysiwygToolbars() : array;

    public function __construct()
    {
        $customToolbars = $this->wysiwygToolbars();
        add_filter('acf/rest_api/post/get_fields', [$this, 'acfGetFields']);
        add_filter('acf/fields/wysiwyg/toolbars', function (array $toolbars) use ($customToolbars) {
            return array_merge($toolbars, $customToolbars);
        });
    }

    public function acfGetFields(array $data) : array
    {
        if (!empty($data)) {
            array_walk_recursive($data, ['self', 'serializeFeaturedImage']);
        }

        return $data;
    }

    public function serializeFeaturedImage(&$item) : void
    {
        if (!is_object($item)) {
            return null;
        }

        $item->featured = [
            'thumbnail' => wp_get_attachment_image_src(get_post_thumbnail_id($item->ID), 'thumbnail'),
            'medium'    => wp_get_attachment_image_src(get_post_thumbnail_id($item->ID), 'medium'),
            'large'     => wp_get_attachment_image_src(get_post_thumbnail_id($item->ID), 'full'),
            'xlarge'    => wp_get_attachment_image_src(get_post_thumbnail_id($item->ID), 'full'),
        ];
    }
}
