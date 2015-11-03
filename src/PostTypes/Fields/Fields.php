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
        $this->fields();
        $this->connector();
    }

    /**
     * {@inheritdoc}
     */
    public function removeScreenAttributes()
    {
    }
}
