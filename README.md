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

return (new PhpCsFixer\Config())
    ->setFinder($finder)
    ->registerCustomRuleSets([
        new MNIB\CsFixer\MNIBStandardSet(),
    ])
    ->setParallelConfig(PhpCsFixer\Runner\Parallel\ParallelConfigFactory::detect())
    ->setRiskyAllowed(true)
    ->setRules([
        '@MNIB/Standard' => true,

        'declare_strict_types' => true,
        'strict_comparison' => true,
        'strict_param' => true,
        'string_line_ending' => true,
    ])
;
```
