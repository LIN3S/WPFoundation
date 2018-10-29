<?php

namespace LIN3S\WPFoundation\PostTypes\Fields;


interface FieldConnector
{
    /**
     * @return array
     */
    public function connector();

    /**
     * @return string
     */
    public function name();
}