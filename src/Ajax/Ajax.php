<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\WPFoundation\Configuration\Ajax;

/**
 * Abstract class of AJAX class that implements the interface.
 * This class avoids the use of callbacks in the constructor.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
abstract class Ajax implements AjaxInterface
{
    /**
     * The AJAX action name.
     *
     * @var string
     */
    protected $action;

    /**
     * Constructor.
     */
    public function __construct()
    {
        add_action('wp_ajax_nopriv_' . $this->action, [$this, 'ajax']);
        add_action('wp_ajax_' . $this->action, [$this, 'ajax']);
    }
}
