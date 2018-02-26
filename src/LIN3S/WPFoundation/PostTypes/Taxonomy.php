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
 * @author Gorka Laucirica <gorka.lauzirika@gmail.com>
 */
abstract class Taxonomy
{
    abstract public function name() : string;

    abstract public function associatedPostType() : string;

    abstract public function options() : TaxonomyOptions;

    public function __construct()
    {
        add_action('init', function () {
            register_taxonomy(
                [$this, 'name'],
                [$this, 'associatedPostType'],
                [$this, 'options']
            );
        });
        add_filter('term_link', [$this, 'permalink'], 1, 2);
    }

    public function permalink(string $url, string $term) : string
    {
        return $url;
    }
}
