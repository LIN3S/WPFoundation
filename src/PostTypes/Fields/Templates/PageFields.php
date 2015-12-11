<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\WPFoundation\PostTypes\Fields\Templates;

use LIN3S\WPFoundation\PostTypes\Fields\Fields;

/**
 * Abstract page fields class that extends the fields basic
 * behaviour, implementing the "connector" and "removeScreenAttributes"
 * methods with the common use case.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
abstract class PageFields extends Fields
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $newPostId = filter_input(INPUT_GET, 'post', FILTER_SANITIZE_NUMBER_INT);
        $updatePostId = filter_input(INPUT_POST, 'post_ID', FILTER_SANITIZE_NUMBER_INT);

        if (isset($newPostId)) {
            $postId = absint($newPostId);
        } elseif (isset($updatePostId)) {
            $postId = absint($updatePostId);
        } else {
            add_action('add_meta_boxes', [$this, 'addMetaBox']);
        }
        if (false === isset($postId) || $this->name === get_post_meta($postId, '_wp_page_template', true)) {
            add_action('admin_init', [$this, 'removeScreenAttributes']);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function connector()
    {
        return [
            [
                [
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => 'page',
                ],
                [
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => $this->name,
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function removeScreenAttributes()
    {
        remove_post_type_support('page', 'comments');
        remove_post_type_support('page', 'custom-fields');
        remove_post_type_support('page', 'editor');
    }

    /**
     * Callback that adds the meta box.
     */
    public function addMetaBox()
    {
        add_meta_box(
            'lin3s-id-default-meta-box',
            'LIN3S INFO',
            [$this, 'metaBox'],
            'page'
        );
    }

    /**
     * Callback that prints the meta box.
     *
     * @param mixed  $post The post
     * @param string $box  The box
     */
    public function metaBox($post, $box)
    {
        echo <<<EOF
<h1 style="text-align: center;">
    PLEASE ADD <strong>PAGE TITLE</strong> AND SELECT A TEMPLATE IN THE <strong>TEMPLATE SELECTOR</strong>
</h1>
EOF;
    }
}
