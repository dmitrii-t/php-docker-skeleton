<?php

declare(strict_types=1);

use PhpCsFixer\Config;

$finder = PhpCsFixer\Finder::create()
    ->in([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ]);

return (new Config())
    ->setCacheFile(__DIR__ . '/var/.php_cs.cache')
    ->setRules([
        '@PSR12' => true,
        'braces' => [
            'allow_single_line_closure' => true,
        ],
        'blank_line_before_statement' => [
            'statements' => ['continue', 'do', 'exit', 'goto', 'if', 'return', 'switch', 'throw', 'try']
        ],
        'yoda_style' => false,
        'binary_operator_spaces' => [
            'operators' => [
                '=' => 'single_space',
            ]
        ],
        'declare_strict_types' => true,
        'array_indentation' => true
    ])
    ->setFinder($finder)
;
