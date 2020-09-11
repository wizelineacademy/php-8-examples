<?php
/**
 * Named Parameters Examples.
 * 
 * To run: `bin/php8 examples/named-parameters.php`
 * 
 * @see https://wiki.php.net/rfc/named_params
 */

require __DIR__ . '/lib/utilities.php';
heading('Named Parameters');
print 'This code is executing under PHP ' .PHP_VERSION . "\n";

/**
 * Simulates creating a new document.
 *  
 * @param string $title 
 * @param string $format = 'txt'
 * @param string $content = ''
 * @param string $encoding = 'UTF-8'
 *
 * @return void 
 */
function createDocument(
    string $title,
    string $format = 'txt',
    string $content = '',
    string $encoding = 'UTF-8',
): void {
    $length = strlen($content);

    print "Creating {$title}\n"
        . "\tFormat:         {$format}\n"
        . "\tEncoding:       {$encoding}\n"
        . "\tContent length: {$length}\n";
}

heading('Example #1: PHP 7 Style');

// Before PHP 8, if we were happy with all of the default
// values of the optional arguments except the last one,
// we would still need to specify them in our call:
createDocument(
    'My New Document', 
    'txt',             
    '',                
    'UTF-16',
);

heading('Example #2: Using Named Params');

// Now we add the names of each parameter. This makes it
// easier to understand the call at a glance.
createDocument(
    title:    'My New Document', 
    format:   'txt',             
    content:  '',                
    encoding: 'UTF-16',
);

heading('Example #3: Skipping Optional Params');

// When we use named parameters it also gives us the ability
// to skip optional params where we are happy with the
createDocument(
    title:    'My New Document',              
    encoding: 'UTF-16',
);

heading('Example #4: Skipping Names (of Positional Args)');

// Notice how in this further example we skip naming of the
// first ('positional') argument. This is fine, but the positional
// args must come before the named args.
createDocument(
    'My New Document',              
    encoding: 'UTF-16',
);


