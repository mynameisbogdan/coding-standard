<?php

declare(strict_types=1);

namespace MNIB\CsFixer;

final class Config extends AbstractConfig
{
    public function __construct()
    {
        parent::__construct('MNIB for PHP 7.4+');

        $this->addRules([
            'control_structure_braces' => true,
            'curly_braces_position' => true,
            'no_multiple_statements_per_line' => true,
            'no_trailing_comma_in_singleline' => true,
            'single_space_around_construct' => true,
            'statement_indentation' => true,
        ]);
    }
}
