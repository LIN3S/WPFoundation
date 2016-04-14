<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-2016 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\WPFoundation\PostTypes\Fields;

use LIN3S\WPFoundation\PostTypes\Fields\Components\FieldComponent;

/**
 * Abstract class of base custom fields that implements the interface.
 * This class avoids the redundant task of create the same Fields constructor.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
abstract class Fields implements FieldsInterface
{
    /**
     * The template name.
     *
     * @var string
     */
    protected $name;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->fields();
        $this->connector();

        if (false === is_admin()) {
            return;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function fields()
    {
        foreach ($this->components() as $component) {
            if (false === class_exists($component)) {
                throw new \Exception(sprintf('The %s class does not exist', $component));
            }
            if ($component instanceof FieldComponent) {
                throw new \Exception('The %s class must be extend the FieldComponent', $component);
            }
            $component::register($this->name, $this->connector());
        }
    }

    /**
     * {@inheritdoc}
     */
    public function components()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function addScreenAttributes()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function removeScreenAttributes()
    {
    }
}
