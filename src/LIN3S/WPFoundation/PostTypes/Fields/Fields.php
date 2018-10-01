<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-present LIN3S <info@lin3s.com>
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
class Fields implements FieldsInterface
{
    /**
     * The template name.
     *
     * @var string
     */
    protected $name;

    /**
     * @var array
     */
    private $components;

    /**
     * @var FieldConnector|null
     */
    private $connector;

    /**
     * Constructor.
     */
    public function __construct(
        $components = [],
        $connector = null
    )
    {
        if ($connector !== null && !$connector instanceof FieldConnector) {
            throw new \Exception('Connector must implement FieldConnector');
        }

        $this->connector = $connector;
        $this->components = $components;

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
        return $this->components;
    }

    /**
     * {@inheritdoc}
     */
    public function connector()
    {
        if ($this->connector === null) {
            return [];
        }

        return $this->connector->connector();
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
