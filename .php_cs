<?php

/*
 * This file is part of the WPFoundation library.
 *
 * Copyright (c) 2015-2016 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$header = <<<'EOF'
This file is part of the WPFoundation library.

Copyright (c) 2015-present LIN3S <info@lin3s.com>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
EOF;

Symfony\CS\Fixer\Contrib\HeaderCommentFixer::setHeader($header);

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->in([__DIR__ . '/src', __DIR__ . '/fixtures'])
    ->notName('*.yml')
    ->notName('*.xml')
    ->notName('*Spec.php');

return Symfony\CS\Config\Config::create()
    ->finder($finder)
    ->level(Symfony\CS\FixerInterface::SYMFONY_LEVEL)
    ->fixers([
        '-unalign_double_arrow',
        '-concat_without_spaces',
        'align_double_arrow',
        'concat_with_spaces',
        'header_comment',
        'multiline_spaces_before_semicolon',
        'newline_after_open_tag',
        'ordered_use',
        'php4_constructor',
        'phpdoc_order',
        'short_array_syntax',
        'short_echo_tag',
        'strict',
        'strict_param',
    ]);
