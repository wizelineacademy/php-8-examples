<?php
/**
 * Stable Sorts
 * 
 * To run: `bin/php8 examples/stable-sorts.php`
 * Also:   `bin/php7 examples/stable-sorts.php`
 * 
 * To see how sorts (on large-ish arrays of more than 200
 * elements) behaved before PHP 8, you will also need to
 * execute this script using PHP 7.
 * 
 * @see https://wiki.php.net/rfc/stringable
 */

require __DIR__ . '/lib/utilities.php';
heading('Stable Sorts');
print 'This code is executing under PHP ' .PHP_VERSION . "\n";

// Our data source is an array of arrays. The inner arrays
// each contain two elements: a number and a letter.
//
// In the source array, the letters are already well-ordered 
// and so if we subsequently sort by the number element we would
// expect the implicit secondary ordering of the letter elements
// to remain stable.
$data = include __DIR__ . '/lib/sort-data.php';

// Custom sort by the first (numeric) element of each inner array.
usort($data, function($a, $b) { 
    if ($a[0] < $b[0]) {
        return -1;
    }
    elseif ($a[0] > $b[0]) {
        return 1;
    }
    else {
        return 0;
    }
});

// Let's print our sorted array
print "\nUnder PHP 8 we expect column 1 and column 2 to both be well sorted\n"
    . "but under PHP 7 this may not be so: pay attention to the ordering of\n"
    . "column 2 (the letters) in that case.\n\n";

foreach ($data as $node) {
    print "{$node[0]}: {$node[1]}\n";
}
