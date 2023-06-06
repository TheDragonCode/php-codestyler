<?php

declare(strict_types=1);

return [
    '@DoctrineAnnotation' => true,
    '@PHP70Migration'     => true,
    '@PHP71Migration'     => true,
    '@PHP73Migration'     => true,
    '@PHP74Migration'     => true,
    '@PHP80Migration'     => true,
    '@PHP81Migration'     => true,
    '@PER'                => true,
    '@Symfony'            => true,
    'array_indentation'   => true,

    'binary_operator_spaces' => [
        'default' => 'align_single_space_minimal',
    ],

    'blank_line_before_statement' => [
        'statements' => [
            'continue',
            'declare',
            'default',
            'do',
            'exit',
            'for',
            'foreach',
            'goto',
            'if',
            'include',
            'include_once',
            'phpdoc',
            'require',
            'require_once',
            'return',
            'switch',
            'throw',
            'try',
            'while',
            'yield',
            'yield_from',
        ],
    ],

    'class_attributes_separation' => [
        'elements' => [
            'case'         => 'none',
            'const'        => 'none',
            'method'       => 'one',
            'property'     => 'one',
            'trait_import' => 'none',
        ],
    ],

    'class_definition' => [
        'multi_line_extends_each_single_line' => true,
        'single_item_single_line'             => true,
        'single_line'                         => true,
        'space_before_parenthesis'            => true,
    ],

    'combine_consecutive_issets' => true,
    'combine_consecutive_unsets' => true,

    'concat_space' => [
        'spacing' => 'one',
    ],

    'control_structure_braces' => true,

    'control_structure_continuation_position' => [
        'position' => 'next_line',
    ],

    'declare_parentheses' => true,

    'escape_implicit_backslashes' => [
        'double_quoted'  => true,
        'heredoc_syntax' => true,
        'single_quoted'  => false,
    ],

    'explicit_indirect_variable' => true,

    'global_namespace_import' => [
        'import_classes' => true,
    ],

    'heredoc_to_nowdoc'                 => true,
    'method_chaining_indentation'       => true,
    'multiline_comment_opening_closing' => true,

    'multiline_whitespace_before_semicolons' => [
        'strategy' => 'no_multi_line',
    ],

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
            'use_trait',
        ],
    ],

    'no_superfluous_elseif'             => true,
    'no_useless_else'                   => true,
    'no_useless_return'                 => true,
    'not_operator_with_successor_space' => true,

    'nullable_type_declaration_for_default_null_value' => [
        'use_nullable_type_declaration' => true,
    ],

    'operator_linebreak' => [
        'only_booleans' => false,
    ],

    'ordered_class_elements' => [
        'order' => [
            'use_trait',
            'case',
            'public',
            'protected',
            'private',
            'constant',
            'property',
            'property_static',
            'phpunit',
            'method_abstract',
            'construct',
            'method',
            'method_static',
            'destruct',
            'magic',
        ],
    ],

    'ordered_imports' => [
        'imports_order' => [
            'class',
            'const',
            'function',
        ],
    ],

    'ordered_interfaces' => [
        'direction' => 'ascend',
        'order'     => 'alpha',
    ],

    'ordered_types' => [
        'null_adjustment' => 'always_last',
        'sort_algorithm'  => 'alpha',
    ],

    'phpdoc_add_missing_param_annotation' => [
        'only_untyped' => false,
    ],

    'phpdoc_align' => [
        'align' => 'left',
        'tags'  => [
            'var',
            'param',
            'property',
            'property-read',
            'property-write',
            'method',
            'type',
            'throws',
            'return',
        ],
    ],

    'phpdoc_line_span' => [
        'const'    => 'single',
        'method'   => 'multi',
        'property' => 'single',
    ],

    'phpdoc_order' => [
        'order' => [
            'param',
            'throws',
            'return',
        ],
    ],

    'phpdoc_var_annotation_correct_order' => true,
    'return_assignment'                   => true,
    'self_static_accessor'                => true,
    'simplified_if_return'                => true,
    'simplified_null_return'              => true,

    'single_line_comment_style' => [
        'comment_types' => [
            'asterisk',
            'hash',
        ],
    ],

    'single_line_empty_body' => true,

    'types_spaces' => [
        'space_multiple_catch' => 'none',
    ],

    'whitespace_after_comma_in_array' => [
        'ensure_single_space' => true,
    ],

    'yoda_style' => [
        'always_move_variable' => true,
        'equal'                => false,
        'identical'            => false,
        'less_and_greater'     => false,
    ],

    'Laravel/laravel_phpdoc_alignment' => true,

    'DragonCode/extra_whitespaces_in_single_line_anonymous_function' => true,
];
