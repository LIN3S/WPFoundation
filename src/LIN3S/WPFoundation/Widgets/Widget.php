<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-2016 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\WPFoundation\Widgets;

/**
 * Abstract class of base Widget that implements the interface.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
abstract class Widget extends \WP_Widget implements WidgetInterface
{
    /**
     * Constructor.
     *
     * @param string $id          The name id
     * @param string $name        The name
     * @param array  $description The description
     */
    public function __construct($id, $name, $description)
    {
        parent::__construct($id, $name, ['description' => $description]);

        add_action('widgets_init', [$this, 'register']);
    }

    /**
     * {@inheritdoc}
     */
    public function name()
    {
        return $this->id_base;
    }

    /**
     * {@inheritdoc}
     */
    public function number()
    {
        return $this->number;
    }
}
