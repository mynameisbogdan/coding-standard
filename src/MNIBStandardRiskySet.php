<?php

declare(strict_types=1);

namespace MNIB\CsFixer;

use PhpCsFixer\RuleSet\RuleSetDefinitionInterface;

final class MNIBStandardRiskySet implements RuleSetDefinitionInterface
{
    public function getDescription(): string
    {
        return 'Standard set of personal coding rules, risky variant';
    }

    public function getName(): string
    {
        return '@MNIB/Standard:risky';
    }

    public function getRules(): array
    {
        return [
            '@Symfony:risky' => true,

            'declare_strict_types' => true,
            'native_constant_invocation' => [
                'include' => ['@all'],
                'scope' => 'namespaced',
            ],
            'native_function_invocation' => [
                'include' => ['@all'],
                'scope' => 'namespaced',
            ],
            'ordered_traits' => false,
            'self_accessor' => false,
            'strict_comparison' => true,
        ];
    }

    public function isRisky(): bool
    {
        return true;
    }
}
