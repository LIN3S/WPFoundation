<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-2016 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\WPFoundation\Configuration\Assets;

/**
 * Abstract class of assets class that implements the interface.
 * This class avoids the use of callbacks in the constructor.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Gorka Laucirica <gorka.lauzirika@gmail.com>
 */
abstract class Assets implements AssetsInterface
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        if (true === WP_DEBUG) {
            add_action('wp_enqueue_scripts', [$this, 'developmentAssets']);
        } else {
            add_action('wp_enqueue_scripts', [$this, 'productionAssets']);
        }
        add_action('admin_enqueue_scripts', [$this, 'adminAssets']);

        // @deprecated since version 1.5, will be removed in 2.0. Implement productionAssets and developmentAssets instead.
        add_action('wp_enqueue_scripts', [$this, 'assets']);
    }

    /**
     * {@inheritdoc}
     */
    public function developmentAssets()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function productionAssets()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function adminAssets()
    {
    }

    /**
     * Method that wraps the WordPress internal "wp_enqueue_script"
     * simplifying the process adding some common default values.
     *
     * @param string            $name         The name of asset
     * @param string            $from         The from location, by default is the JS files default location
     * @param array             $dependencies Array which contains the dependencies of the given asset
     * @param string            $version      The version, by default is "1.0.0"
     * @param bool              $inFooter     Checks if the asset is going to be in the footer or not
     * @param array|string|null $ajaxUrl      The ajax url to expose in JS files
     *
     * @return $this Self class instance
     */
    protected function addScript(
        $name,
        $from = AssetsInterface::ASSETS_JS,
        array $dependencies = ['jquery'],
        $version = '1.0.0',
        $inFooter = true,
        $ajaxUrl = null
    ) {
        wp_enqueue_script($name, $this->path($from, $name), $dependencies, $version, $inFooter);

        if (null !== $ajaxUrl) {
            $this->registerAjaxUrls($name, $ajaxUrl);
        }

        return $this;
    }

    /**
     * Method that wraps the WordPress internal "wp_enqueue_style"
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
    ) {
        wp_enqueue_style($name, $this->path($from, $name, 'css'), $dependencies, $version, $media);

        return $this;
    }

    /**
     * Registers the ajax urls inside given JS filename.
     *
     * @param string $name    The script file name
     * @param string $ajaxUrl The name that is going to expose in JS file as ajaxUrl
     *
     *      Usage example with name="subscribe" and ajaxUrl="subscribeAjax":
     *
     *          // subscribe.js
     *
     *          $.ajax({
     *              url: subscribeAjax.ajaxUrl,
     *              method: 'GET',
     *              data: {
     *                  action: 'ajax-action-registered-in-your-php-file',
     *              }
     *          }).done(function (response) {
     *             (...)
     *          });
     */
    protected function registerAjaxUrls($name, $ajaxUrl)
    {
        if (false === is_array($ajaxUrl)) {
            $ajaxUrl = [$ajaxUrl];
        }
        foreach ($ajaxUrl as $url) {
            wp_localize_script($name, $url, [
                'ajaxUrl' => admin_url('admin-ajax.php'),
            ]);
        }
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

    /**
     * Registers all the scripts and stylesheet files.
     * It's a callback of WordPress internal "wp_enqueue_scripts" method.
     *
     * @deprecated since version 1.5, will be removed in 2.0. Implement productionAssets and developmentAssets instead.
     */
    public function assets()
    {
    }
}
