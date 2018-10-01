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

namespace LIN3S\WPFoundation\Widgets;

/**
 * @author Beñat Espiña <benatespina@gmail.com>
 */
abstract class Widget extends \WP_Widget
{
    public function __construct(string $id, string $name, string $description)
    {
        parent::__construct($id, $name, ['description' => $description]);
        add_action('widgets_init', [$this, 'registerWidget']);
    }

    public function name() : string
    {
        return (string) $this->id_base;
    }

    public function number() : int
    {
        return (int) $this->number;
    }

    public function registerWidget() : void
    {
        register_widget(static::class);
    }
}
