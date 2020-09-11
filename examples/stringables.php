<?php
/**
 * Stringables
 * 
 * To run: `bin/php8 examples/stringables.php`
 * 
 * @see https://wiki.php.net/rfc/stringable
 */

require __DIR__ . '/lib/utilities.php';
heading('Stringables');
print 'This code is executing under PHP ' .PHP_VERSION . "\n";

/**
 * Instances of this class can be turned into strings!
 * 
 * Since it explicitly implements the Stringable interface
 * it's easy for functions to type-hint against it.
 */
class MessageContainer implements Stringable {
    public function __construct(
        private string $message
    ) {}

    public function __toString(): string {
        return $this->message;
    }
}

/**
 * Prints a message!
 */
function render(string|Stringable $stringThing): void {
    print $stringThing;
}

render("\nWe can now type-hint using a union of 'string' and ");
render(new MessageContainer("objects that implement 'Stringable'!\n"));
