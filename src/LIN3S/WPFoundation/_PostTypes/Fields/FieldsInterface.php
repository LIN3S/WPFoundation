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

/**
 * Interface of the base fields. This interface forces to implement some
 * useful methods related with custom fields class, improving the consistency.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface FieldsInterface
{
    public function fields() : void;

    public function components() : array;

    public function connector();

    public function addScreenAttributes() : void;

    public function removeScreenAttributes() : void;
}
