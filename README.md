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

return MNIB\CsFixer\Config::create()
    ->setFinder($finder)
;
```
