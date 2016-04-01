<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-2016 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\WPFoundation\Configuration\Theme;

/**
 * Interface of the theme. This interface forces to instantiate all the
 * theme classes, to add all the templates and initialize the context.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface ThemeInterface
{
    /**
     * Registers all customization classes.
     */
    public function classes();

    /**
     * Adds custom templates that can be selected in the Wordpress administration panel.
     * It's a callback of "template_selector_available" method.
     *
     * @param array $templates The given templates array
     *
     * @return array Merged resultant templates array
     */
    public function templates($templates);

    /**
     * Customizes the context adding repetitive information.
     * It's a callback of "timber_context" method.
     *
     * @param array $context The array of context given
     *
     * @return array The customized array given
     */
    public function context(array $context);
}
