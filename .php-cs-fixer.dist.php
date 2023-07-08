<?php

declare(strict_types=1);

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__)
    ->exclude('config')
    ->exclude('var')
    ->exclude('public/bundles')
    ->exclude('public/build')
    ->notPath('bin/console')
    ->notPath('public/index.php')
    ->notPath('deploy.php')
;

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@PhpCsFixer' => true, // @see https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html
        '@PhpCsFixer:risky' => true, // @see https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html
        '@Symfony' => true, // @see https://cs.symfony.com/doc/ruleSets/Symfony.html
        '@Symfony:risky' => true, // @see https://cs.symfony.com/doc/ruleSets/SymfonyRisky.html
        'array_syntax' => [
            'syntax' => 'short', // array('arg1', 'arg2') => ['arg1', 'arg2']
        ],
        'combine_consecutive_issets' => true, // isset($arg1) && isset($arg1) => isset($arg1, $arg2)
        'combine_consecutive_unsets' => true, // unset($arg1); unset($arg1) => unset($arg1, $arg2)
        'declare_strict_types' => true, // Ajoute le typage strict pour tous les fichiers
        'fopen_flags' => [
            'b_mode' => true, // Ajoute le flag "b" (binary) en 2ème argument de "fopen"
        ],
        'linebreak_after_opening_tag' => true, // Assure qu'il n'y ait aucun code sur la même ligne que l'ouverture du tag "<?php"
        'list_syntax' => [
            'syntax' => 'short', // list($arg) = $array => [$arg] = $array
        ],
        'mb_str_functions' => true, // Remplace les méthodes sur les strings par leur équivalent en multibyte (UTF-8)
        'no_php4_constructor' => true, // Convertit les constructeurs tels qu'ils devaient être en PHP 4 par "__construct"
        'no_superfluous_phpdoc_tags' => true, // Retirer les déclarations en PHPDoc qui ne servent à rien (typage déjà défini, ...)
        'no_unreachable_default_argument_value' => true, // Dans une fonction, les arguments ayant une valeur par défaut ne doivent pas être positionnés avant des argument n'en aillant pas
        'no_useless_else' => true, // Préférer une succession de conditions indépendantes au lieu d'avoir un "else", si le cas le permet
        'no_useless_return' => true, // Supprime les "return" inutiles
        'nullable_type_declaration_for_default_null_value' => [
            'use_nullable_type_declaration' => false, // Supprime le "?" avant la déclaration du type d'un paramètre de fonction par défaut à NULL
        ],
        'ordered_class_elements' => [ // Tri les éléments dans les classes
            'order' => [
                'use_trait',
                'case',
                'constant_public',
                'constant_protected',
                'constant_private',
                'property_public',
                'property_protected',
                'property_private',
                'method_abstract',
                'construct',
                'destruct',
                'magic',
                'phpunit',
                'method_public',
                'method_public_static',
                'method_protected',
                'method_protected_static',
                'method_private',
                'method_private_static',
            ],
        ],
        'ordered_imports' => [  // Tri les imports par ordre alphabétique
            'sort_algorithm' => 'alpha',
            'imports_order' => [
                'const',
                'class',
                'function',
            ],
        ],
        'php_unit_strict' => true, // Utilisation de "assertSame" au lieu de "assertEquals"
        'phpdoc_align' => false, // Les déclarations dans la PHPDoc ne doivent pas être alignées
        'phpdoc_order' => true, // Dans l'ordre : "@param" -> "@throws" -> "@return"
        'phpdoc_to_comment' => false, // Permet de pouvoir utiliser des docblocks partout
        'psr_autoloading' => true, // Le path des classes doivent respecter leur namespace
        'semicolon_after_instruction' => true, // Terminer toutes les instructions par un ";"
        'short_scalar_cast' => true, // (boolean) $arg => (bool) $arg
        'strict_comparison' => true, // $arg1 == $arg2 => $arg1 === $arg2
        'strict_param' => true, // Les fonctions pouvant être utilisées en mode "strict" le seront (ex: \in_array())
        'trailing_comma_in_multiline' => [
            'elements' => [ // Ajoute des "," à la fin des listes
                'arrays',
                'arguments',
                'parameters',
            ],
        ],
    ])
    ->setFinder($finder)
;
