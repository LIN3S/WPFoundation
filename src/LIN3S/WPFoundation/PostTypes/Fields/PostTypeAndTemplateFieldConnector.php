<?php

namespace LIN3S\WPFoundation\PostTypes\Fields;


class PostTypeAndTemplateFieldConnector implements FieldConnector
{
    private $postType;
    private $template;

    public function __construct($postType, $template)
    {
        $this->postType = $postType;
        $this->template = $template;
    }

    public function connector()
    {
        return [
            [
                [
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => $this->postType,
                ],
                [
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => $this->template,
                ],
            ],
        ];
    }
}