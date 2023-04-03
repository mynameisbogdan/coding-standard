<?php

declare(strict_types=1);

namespace MNIB\CsFixer;

final class Config73 extends AbstractConfig
{
    public function __construct()
    {
        parent::__construct('MNIB for PHP 7.3');

        $this->addRules([
            'braces' => ['allow_single_line_closure' => true],
            'no_trailing_comma_in_list_call' => true,
            'no_trailing_comma_in_singleline_array' => true,
            'single_space_after_construct' => true,
        ]);
    }
}
