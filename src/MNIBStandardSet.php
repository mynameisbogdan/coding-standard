<?php

declare(strict_types=1);

namespace MNIB\CsFixer;

use PhpCsFixer\RuleSet\RuleSetDefinitionInterface;

final class MNIBStandardSet implements RuleSetDefinitionInterface
{
    public function getDescription(): string
    {
        return 'Standard set of personal coding rules';
    }

    public function getName(): string
    {
        return '@MNIB/Standard';
    }

    public function getRules(): array
    {
        return [
            '@Symfony' => true,

            'blank_line_between_import_groups' => false,
            'blank_line_before_statement' => [
                'statements' => [
                    'continue',
                    'declare',
                    'return',
                    'throw',
                    'try',
                ],
            ],
            'cast_spaces' => ['space' => 'none'],
            'class_attributes_separation' => [
                'elements' => [
                    'const' => 'one',
                    'method' => 'one',
                    'property' => 'one',
                    'trait_import' => 'none',
                ],
            ],
            'class_definition' => [
                'single_item_single_line' => true,
                'space_before_parenthesis' => true,
            ],
            'combine_consecutive_issets' => true,
            'combine_consecutive_unsets' => true,
            'concat_space' => ['spacing' => 'one'],
            'empty_loop_body' => true,
            'explicit_indirect_variable' => true,
            'general_phpdoc_annotation_remove' => [
                'annotations' => [
                    'api',
                    'author',
                    'category',
                    'copyright',
                    'created',
                    'license',
                    'package',
                    'since',
                    'subpackage',
                    'version',
                ],
                'case_sensitive' => false,
            ],
            'general_phpdoc_tag_rename' => [
                'replacements' => [
                    'inheritDocs' => 'inheritdoc',
                    'inheritDoc' => 'inheritdoc',
                ],
            ],
            'global_namespace_import' => [
                'import_classes' => true,
                'import_constants' => true,
                'import_functions' => true,
            ],
            'heredoc_to_nowdoc' => true,
            'increment_style' => ['style' => 'post'],
            'method_argument_space' => [
                'after_heredoc' => true,
                'on_multiline' => 'ensure_fully_multiline',
            ],
            'method_chaining_indentation' => true,
            'multiline_whitespace_before_semicolons' => ['strategy' => 'new_line_for_chained_calls'],
            'no_extra_blank_lines' => [
                'tokens' => [
                    'attribute',
                    'break',
                    'case',
                    'continue',
                    'curly_brace_block',
                    'default',
                    'extra',
                    'parenthesis_brace_block',
                    'return',
                    'square_brace_block',
                    'switch',
                    'throw',
                    'use',
                ],
            ],
            'no_superfluous_elseif' => true,
            'no_superfluous_phpdoc_tags' => [
                'allow_hidden_params' => true,
                'allow_mixed' => true,
                'remove_inheritdoc' => false,
            ],
            'ordered_class_elements' => true,
            'phpdoc_line_span' => [
                'case' => 'single',
                'class' => 'multi',
                'const' => 'single',
                'function' => 'multi',
                'method' => 'multi',
                'other' => 'single',
                'property' => 'single',
                'trait_import' => 'single',
            ],
            'phpdoc_no_empty_return' => true,
            'phpdoc_order_by_value' => [
                'annotations' => [
                    'author',
                    'covers',
                    'coversNothing',
                    'dataProvider',
                    'depends',
                    'group',
                    'internal',
                    'mixin',
                    'property',
                    'property-read',
                    'property-write',
                    'requires',
                    'throws',
                    'uses',
                ],
            ],
            'phpdoc_tag_type' => [
                'tags' => [
                    'api' => 'annotation',
                    'author' => 'annotation',
                    'copyright' => 'annotation',
                    'deprecated' => 'annotation',
                    'example' => 'annotation',
                    'global' => 'annotation',
                    'inheritDoc' => 'inline',
                    'internal' => 'annotation',
                    'license' => 'annotation',
                    'method' => 'annotation',
                    'package' => 'annotation',
                    'param' => 'annotation',
                    'property' => 'annotation',
                    'return' => 'annotation',
                    'see' => 'annotation',
                    'since' => 'annotation',
                    'throws' => 'annotation',
                    'todo' => 'annotation',
                    'uses' => 'annotation',
                    'var' => 'annotation',
                    'version' => 'annotation',
                ],
            ],
            'return_assignment' => true,
            'type_declaration_spaces' => [
                'elements' => ['constant', 'function', 'property'],
            ],
            'yoda_style' => [
                'equal' => false,
                'identical' => false,
            ],
        ];
    }

    public function isRisky(): bool
    {
        return false;
    }
}
