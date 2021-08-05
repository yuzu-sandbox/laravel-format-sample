<?php

$finder = PhpCsFixer\Finder::create()
    ->in([
        __DIR__.'/app',
        __DIR__.'/config',
        __DIR__.'/database/factories',
        __DIR__.'/database/seeders',
        __DIR__.'/routes',
        __DIR__.'/tests',
    ])
;

$config = new PhpCsFixer\Config();

return $config
    ->setRiskyAllowed(true)
    ->setRules([
        '@PhpCsFixer' => true,
        '@PhpCsFixer:risky' => true,
        'ordered_imports' => ['sort_algorithm' => 'alpha', 'imports_order' => ['const', 'class', 'function']],
    ])
    ->setFinder($finder)
;
