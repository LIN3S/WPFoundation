<?php

namespace LIN3S\WPFoundation\PostTypes\Fields;


class PostTypeFieldConnector implements FieldConnector
{
    private $postType;

    public function __construct($postType)
    {
        $this->postType = $postType;
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
            ],
        ];
    }
}