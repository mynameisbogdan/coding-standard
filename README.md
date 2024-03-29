# MNIB Coding Standard

Create a file named `.php_cs.dist` with the contents:
```php
<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . '/src')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true)
    ->files()
    ->name('*.php')
;

return (new MNIB\CsFixer\Config())
    ->setFinder($finder)
    ->setRiskyAllowed(true)
    ->addRules([
        'declare_strict_types' => true,
        'strict_comparison' => true,
        'strict_param' => true,
        'string_line_ending' => true,
    ])
;
```
