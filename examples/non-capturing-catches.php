<?php
/**
 * Non-capturing catches.
 * 
 * To run: `bin/php8 examples/non-capturing-catches.php`
 * 
 * @see https://wiki.php.net/rfc/non-capturing_catches
 */

require __DIR__ . '/lib/utilities.php';
heading('Non-Capturing Catches');
print 'This code is executing under PHP ' .PHP_VERSION . "\n";

// Let's start by looking at a conventional piece of code using a 
// try/catch structure.
heading('Example #1: A Traditional Capturing Catch');

try {
    // Let's trigger an exception by trying to create a DateTime object
    // where we specify the Dark Side of Pluto as the timezone (in most
    // cases, this will not actually be available).
    new DateTime('now', new DateTimeZone('Pluto/Dark-Side'));
}
catch (Exception $e) {
    // Now we can process the error and do something with the exception.
    print "Oh oh! We tried to figure out the current time on Pluto, "
        . "but the following error occurred:\n\n\t" 
        . $e->getMessage() . "\n";
}

// Sometimes we don't actually want to do anything with the exception
// object. In those cases we can save ourselves an assignment.
heading('Example #2: A Non-Capturing Catch');

try {
    new DateTime('now', new DateTimeZone('Pluto/Dark-Side'));
}
catch (Exception) {
    // Now we can process the error and do something with the exception.
    print "Oh oh! We could not figure out the current time on Pluto.\n";
}
