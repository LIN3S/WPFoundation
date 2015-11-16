<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\WPFoundation\PostTypes\Fields;

use LIN3S\WPFoundation\Configuration\Translations\Translations;
use ReflectionClass;

/**
 * Abstract class of base custom fields that implements the interface.
 * This class avoids the redundant task of create the same Fields constructor.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
abstract class Fields implements FieldsInterface
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        if (class_exists('acf_pro')) {
            $methods = (new ReflectionClass(get_called_class()))->getMethods();

            $result = [];
            forEach ($methods as $reflectionMethod) {
                $method = $reflectionMethod->name;
                if ($method !== '__construct'
                    && $method !== 'isFlexible'
                    && $method !== 'flexibleContentLayout'
                    && $method !== 'connector'
                ) {
                    $result[] = $this->$method();
                }
                if (true === $this->isFlexible()) {
                    $this->flexibleContentLayout($result);
                } else {
                    $this->$method();
                }
            }
        } else {
            $this->fields();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function fields()
    {
    }

    /**
     * Enables the ACF base flexible content layout.
     *
     * @param array $methodResult The results of declared dynamic methods
     */
    protected function flexibleContentLayout($methodResult)
    {
        remove_post_type_support('page', 'editor');

        acf_add_local_field_group([
            'key'      => 'field_layout',
            'name'     => 'page_layout',
            'title'    => Translations::trans('Page layout'),
            'fields'   => [
                [
                    'allow_null'   => 0,
                    'button_label' => Translations::trans('Add Element'),
                    'key'          => 'field_page_layout',
                    'label'        => Translations::trans('Page layout'),
                    'name'         => 'page_layout',
                    'required'     => 1,
                    'type'         => 'flexible_content',
                    'layouts'      => $methodResult
                ],
            ],
            'location' => $this->connector(),
        ]);
    }
}
