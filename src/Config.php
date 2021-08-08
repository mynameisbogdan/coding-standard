<?php

declare(strict_types=1);

namespace MNIB\CsFixer;

use PhpCsFixer\Config as BaseConfig;
use PhpCsFixer\ConfigInterface;

final class Config extends BaseConfig
{
    public function __construct()
    {
        parent::__construct('MNIB');

        $this->setRules([
            '@PSR2' => true,

            'align_multiline_comment' => true,
            'array_indentation' => true,
            'array_syntax' => ['syntax' => 'short'],
            'binary_operator_spaces' => [
                'default' => 'single_space',
            ],
            'blank_line_after_namespace' => true,
            'blank_line_after_opening_tag' => true,
            'blank_line_before_statement' => [
                'statements' => [
                    'continue',
                    'declare',
                    'return',
                    'throw',
                    'try',
                ],
            ],
            'braces' => ['allow_single_line_closure' => true],
            'cast_spaces' => ['space' => 'none'],
            'class_attributes_separation' => [
                'elements' => [
                    'const' => 'one',
                    'method' => 'one',
                    'property' => 'one',
                    'trait_import' => 'none',
                ],
            ],
            'class_definition' => ['single_item_single_line' => true],
            'clean_namespace' => true,
            'combine_consecutive_issets' => true,
            'combine_consecutive_unsets' => true,
            'compact_nullable_typehint' => true,
            'concat_space' => ['spacing' => 'one'],
            'declare_equal_normalize' => ['space' => 'none'],
            'echo_tag_syntax' => ['format' => 'long'],
            'explicit_indirect_variable' => true,
            'function_typehint_space' => true,
            'fully_qualified_strict_types' => true,
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
            ],
            'general_phpdoc_tag_rename' => [
                'case_sensitive' => true,
                'replacements' => [
                    'inheritDoc' => 'inheritdoc',
                ],
            ],
            'global_namespace_import' => [
                'import_classes' => true,
                'import_constants' => true,
                'import_functions' => true,
            ],
            'heredoc_indentation' => true,
            'heredoc_to_nowdoc' => true,
            'include' => true,
            'increment_style' => ['style' => 'post'],
            'standardize_increment' => true,
            'list_syntax' => ['syntax' => 'short'],
            'lowercase_cast' => true,
            'lowercase_static_reference' => true,
            'magic_constant_casing' => true,
            'magic_method_casing' => true,
            'method_argument_space' => [
                'on_multiline' => 'ensure_fully_multiline',
            ],
            'method_chaining_indentation' => true,
            'multiline_whitespace_before_semicolons' => ['strategy' => 'new_line_for_chained_calls'],
            'native_function_casing' => true,
            'native_function_type_declaration_casing' => true,
            'new_with_braces' => true,
            'no_alternative_syntax' => true,
            'no_blank_lines_after_class_opening' => true,
            'no_blank_lines_after_phpdoc' => true,
            'no_empty_comment' => true,
            'no_empty_phpdoc' => true,
            'no_empty_statement' => true,
            'no_extra_blank_lines' => [
                'tokens' => [
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
                    'use_trait',
                ],
            ],
            'no_leading_import_slash' => true,
            'no_leading_namespace_whitespace' => true,
            'no_mixed_echo_print' => ['use' => 'echo'],
            'no_multiline_whitespace_around_double_arrow' => true,
            'no_null_property_initialization' => true,
            'no_singleline_whitespace_before_semicolons' => true,
            'no_short_bool_cast' => true,
            'no_spaces_around_offset' => true,
            'no_superfluous_elseif' => true,
            'no_trailing_comma_in_singleline_array' => true,
            'no_unneeded_control_parentheses' => true,
            'no_unneeded_curly_braces' => true,
            'no_unused_imports' => true,
            'no_useless_else' => true,
            'no_useless_return' => true,
            'no_whitespace_before_comma_in_array' => true,
            'no_whitespace_in_blank_line' => true,
            'normalize_index_brace' => true,
            'nullable_type_declaration_for_default_null_value' => true,
            'object_operator_without_whitespace' => true,
            'ordered_class_elements' => true,
            'ordered_imports' => [
                'imports_order' => ['class', 'function', 'const'],
            ],
            'phpdoc_align' => true,
            'phpdoc_annotation_without_dot' => true,
            'phpdoc_indent' => true,
            'phpdoc_inline_tag_normalizer' => true,
            'phpdoc_line_span' => [
                'const' => 'single',
                'method' => 'multi',
                'property' => 'single',
            ],
            'phpdoc_no_access' => true,
            'phpdoc_no_alias_tag' => true,
            'phpdoc_no_empty_return' => true,
            'phpdoc_no_useless_inheritdoc' => true,
            'phpdoc_order' => true,
            'phpdoc_return_self_reference' => true,
            'phpdoc_scalar' => true,
            'phpdoc_separation' => true,
            'phpdoc_single_line_var_spacing' => true,
            'phpdoc_summary' => true,
            'phpdoc_tag_type' => [
                'tags' => [
                    'api' => 'annotation',
                    'author' => 'annotation',
                    'copyright' => 'annotation',
                    'deprecated' => 'annotation',
                    'example' => 'annotation',
                    'global' => 'annotation',
                    'inheritdoc' => 'inline',
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
            'phpdoc_trim' => true,
            'phpdoc_trim_consecutive_blank_line_separation' => true,
            'phpdoc_types' => true,
            'phpdoc_types_order' => [
                'null_adjustment' => 'always_last',
                'sort_algorithm' => 'none',
            ],
            'phpdoc_var_annotation_correct_order' => true,
            'phpdoc_var_without_name' => true,
            'protected_to_private' => true,
            'return_assignment' => true,
            'return_type_declaration' => true,
            'semicolon_after_instruction' => true,
            'short_scalar_cast' => true,
            'single_blank_line_before_namespace' => true,
            'single_line_comment_style' => true,
            'single_quote' => true,
            'space_after_semicolon' => true,
            'standardize_not_equals' => true,
            'ternary_operator_spaces' => true,
            'ternary_to_null_coalescing' => true,
            'trailing_comma_in_multiline' => ['elements' => ['arrays']],
            'trim_array_spaces' => true,
            'unary_operator_spaces' => true,
            'visibility_required' => [
                'elements' => [
                    'property',
                    'method',
                    'const',
                ],
            ],
            'whitespace_after_comma_in_array' => true,
            'yoda_style' => [
                'equal' => false,
                'identical' => false,
                'less_and_greater' => false,
            ],
        ]);
    }

    public function addRules(array $rules): ConfigInterface
    {
        $rules = array_replace($this->getRules(), $rules);

        $this->setRules($rules);

        return $this;
    }
}
