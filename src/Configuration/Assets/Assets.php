<?php

/*
 * This file is part of the WP Helpers library.
 *
 * Copyright (c) 2015 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\WPHelpers\Configuration\Assets;

/**
 * Abstract class of assets class that implements the interface.
 * This class avoids the use of callbacks in the constructor.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
abstract class Assets
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'assets']);
    }

    /**
     * Method that wraps the Wordpress internal "wp_enqueue_script"
     * simplifying the process adding some common default values.
     *
     * @param string $name         The name of asset
     * @param string $from         The from location, by default is the JS files default location
     * @param array  $dependencies Array which contains the dependencies of the given asset, by default jQuery
     * @param string $version      The version, by default is "1.0.0"
     * @param bool   $inFooter     Checks if the asset is going to be in the footer or not, by default is "true"
     *
     * @return $this Self class instance
     */
    protected function addScript(
        $name,
        $from = AssetsInterface::ASSETS_JS,
        array $dependencies = ['jquery'],
        $version = '1.0.0',
        $inFooter = true
    )
    {
        wp_enqueue_script($name, $this->path($from, $name), $dependencies, $version, $inFooter);

        return $this;
    }

    /**
     * Method that wraps the Wordpress internal "wp_enqueue_style"
     * simplifying the process adding some common default values.
     *
     * @param string $name         The name of asset
     * @param string $from         The from location, by default is the CSS files default location
     * @param array  $dependencies Array which contains the dependencies of the given asset, by default is empty
     * @param string $version      The version, by default is "1.0.0"
     * @param string $media        The media, by default is "all"
     *
     * @return $this Self class instance
     */
    protected function addStylesheet(
        $name,
        $from = AssetsInterface::CSS,
        array $dependencies = [],
        $version = '1.0.0',
        $media = 'all'
    )
    {
        wp_enqueue_style($name, $this->path($from, $name, 'css'), $dependencies, $version, $media);

        return $this;
    }

    /**
     * Build dynamically the asset directory path with the given parameters.
     *
     * @param string $from     The from location
     * @param string $name     The filename without extension
     * @param string $fileType The file type, by default is "js"
     *
     * @return string
     */
    private function path($from, $name, $fileType = 'js')
    {
        return get_template_directory_uri() . '/Resources/' . $from . '/' . $name . '.' . $fileType;
    }
}
