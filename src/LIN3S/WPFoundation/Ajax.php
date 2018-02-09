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
 */
abstract class Ajax
{
    abstract public function ajax() : void;

    abstract protected function action() : string;

    public function __construct()
    {
        add_action('wp_ajax_nopriv_' . $this->action(), [$this, 'ajax']);
        add_action('wp_ajax_' . $this->action(), [$this, 'ajax']);
    }
}
