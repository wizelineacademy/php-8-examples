<?php
/**
 * Commas Everywhere
 * 
 * To run: `bin/php8 examples/trailing-commas.php`
 * 
 * @see https://wiki.php.net/rfc/trailing_comma_in_parameter_list
 * @see https://wiki.php.net/rfc/trailing_comma_in_closure_use_list
 */

require __DIR__ . '/lib/utilities.php';
heading('Trailing Commas Everywhere');
print 'This code is executing under PHP ' .PHP_VERSION . "\n";

// This first example demonstrates all of the places where attributes
// can be added.
heading('Example #1: Trailing Commas Before PHP8');

$sentence = [
    'It',
    'has',
    'been',
    'possible',
    'to',
    'use',
    'trailing',
    'commas',
    'for',
    'arrays',
    'for',
    'a',
    'long',
    'time',
    'now.',
];

print implode(' ', $sentence) . "\n";

function buildSentence(...$words) {
    print implode(' ', $words) . "\n";
}

buildSentence(
    'Using',
    'trailing',
    'commas',
    'when',
    '*calling*',
    'functions',
    'was',
    'also',
    'possible',
    'before',
    'PHP 8.0.',
);

// Now let's check out how trailing commas can be used in
// function/method parameter and use() lists.
heading('Example #2: Trailing Commas in Param and Use Lists');

function doSomethingComplex(
    int $rotations = 10,
    string $prefix = '',
    float $permutations = 100,
    array $thingamybobs = [],
) {
    print "In PHP 8, function parameter lists can end with a trailing comma.\n";
}

doSomethingComplex();

$message1 = 'In PHP 8, the use() list for anonymous functions and closures ';
$message2 = "can also have a trailing comma.\n";

$messageBuilder = function() use (
    $message1, 
    $message2,
) {
    return $message1 . $message2;
};

print $messageBuilder();
