<?php

namespace LIN3S\WPFoundation\PostTypes;

final class Taxonomy
{
    private $taxonomy;
    private $postType;
    private $options;

    /**
     * Creates a taxonomy for the given post type
     *
     * @param string $taxonomy Taxonomy identifier
     * @param string $postType Post type identifier
     * @param array $options Array of options allowed in register_taxonomy method. See for more info
     * https://codex.wordpress.org/Function_Reference/register_taxonomy
     */
    public function __construct($taxonomy, $postType, $options)
    {
        $this->taxonomy = $taxonomy;
        $this->postType = $postType;
        $this->options = $options;

        add_action('init', [$this, 'initTaxonomy']);
    }

    public function initTaxonomy()
    {
        register_taxonomy($this->taxonomy, $this->postType, $this->options);
    }
}