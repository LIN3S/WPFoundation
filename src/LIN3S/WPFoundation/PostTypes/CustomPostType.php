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
abstract class CustomPostType extends PostType
{
    abstract public function options() : CustomPostTypeOptions;

    abstract protected function registerTaxonomy() : void;

    public function __construct()
    {
        parent::__construct();
        add_action('init', function () {
            register_post_type(
                [$this, 'name'],
                [$this, 'options']
            );
        });
        $this->registerTaxonomy();
    }
}
