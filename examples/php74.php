<?php
/**
 * Examples of key changes brought in by PHP 7.4.
 * 
 * While this repo mostly exists to show off new PHP 8.0 functionality,
 * if you haven't touched PHP in a while you may alsosbe interested in
 * some of the changes introduced in the 7.4 release.
 * 
 * PHP 7.4 introduced more changes than are itemized here, but this is
 * a good starting point!
 * 
 * To run: `bin/php7 examples/php74.php`
 */

require __DIR__ . '/lib/utilities.php';
heading('New in PHP 7.4');
print 'This code is executing under PHP ' .PHP_VERSION . "\n";

// Let's start by looking at arrow functions.
heading('Example #1: Arrow Functions');

$func = function($text) {
    return ucfirst(strtolower(strrev($text))) . "\n";
};

$arrowFunc = fn($text) => ucfirst(strtolower(strrev($text))) . "\n";

print $func('.noisseRPXe elgNIs a yLno niATnoc sERUsolc/snoITcnuf suomYnonA emos');
print $arrowFunc('.edOc ruo GNItirw fo Yaw reSRet a eDIVorp nac noitcNUF worra na sesac eSOHT ni');

// Now let's look at array spreading.
heading('Example #2: Array Spread Operator');

$start = [
    'PHP',
    'is',
    'an',
];

$end = [
    'awesome',
    'language',
    'to',
    'write',
    'in.',
];

print "Joining arrays the old-school way:\n" . join(' ', array_merge($start, $end)) . "\n\n";
print "Joining arrays the new-school way:\n" . join(' ', [...$start, ...$end]) . "\n\n";

// Null coalescing assignments build on the existing null coalesce syntax
// and offer further opportunities to write terse code.
heading('Example #3: Null Coalescing Assignments');

// Existing null coalesce:
$confirmation = function($selection) {
    $selection = $selection ?? 'teddy bear';
    return "You selected a $selection.\n";
};

// New null coalescing assignment:
$confirmation2 = function($selection) {
    $selection ??= 'pineapple';
    return "You selected a $selection.\n";
};

print $confirmation(null);
print $confirmation2(null);

// Finally, let's look at typed properties.
heading('Example #4: Typed Properties');

class ShoppingBasket {
    public $id;
    public $items;
}

class ShoppingBasket2 {
    public int $id;
    public array $items;
}

print "Previously there was no enforcement of type for object properties, allowing "
    . "us to assign (for example) a string to a property intended to contain an array.\n";

$basket = new ShoppingBasket;
$basket->items = 'fruit';


print "Typed properties are optionally available as of PHP 7.4 to provide more type "
    . "safety in this regard.\n";

$basket = new ShoppingBasket2;
$basket->items = ['fruit']; // Try changing to something other than an array.
