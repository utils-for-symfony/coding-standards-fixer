<?php

/*
 * This file is part of the Symfony-Util package.
 *
 * (c) Jean-Bernard Addor adapted from Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use PhpCsFixer\Config;

function symfonyCodingStandardsFixer($fileHeaderComment)
{
//     $finder = PhpCsFixer\Finder::create()
//         ->in(__DIR__)
//         ->exclude('config')
//         ->exclude('var')
//         ->exclude('public/bundles')
//         ->exclude('public/build')
//    ;

    return Config::create()
        ->setRiskyAllowed(true)
        ->setRules(array(
            '@Symfony' => true,
            '@Symfony:risky' => true,
            'array_syntax' => ['syntax' => 'short'],
            'header_comment' => ['header' => $fileHeaderComment, 'separate' => 'both'],
            'linebreak_after_opening_tag' => true,
            'mb_str_functions' => true,
            'no_php4_constructor' => true,
            'no_unreachable_default_argument_value' => true,
            'no_useless_else' => true,
            'no_useless_return' => true,
            'ordered_imports' => true,
            'php_unit_strict' => true,
            'phpdoc_order' => true,
            'semicolon_after_instruction' => true,
            'strict_comparison' => true,
            'strict_param' => true,
        ))
        // ->setFinder($finder)
        // ->setCacheFile(__DIR__.'/var/.php_cs.cache')
    ;
}

// Inpired from https://github.com/symfony/symfony-demo/blob/master/.php_cs.dist 2017 December
