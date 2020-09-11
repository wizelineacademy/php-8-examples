<?php
/**
 * Attribute Examples.
 * 
 * To run: `bin/php8 examples/attributes.php`
 * 
 * Important note: attributes are a much debated addition to the 
 * language. In the course of that debate the proposed syntax 
 * changed from:
 * 
 *     <<Attr('val')>>
 * 
 * To:
 * 
 *     @@Attr('val')
 * 
 * To:
 * 
 *     #[Attr('val')]
 * 
 * The last of those is the final syntax, no more changes are 
 * expected.
 * 
 * Unfortunately, the timing of the change relative to the beta release
 * cycle left us unable to test the examples in this file. Therefore, 
 * please accept our apologies if there are errors. This also means that,
 * to successfully run the code in this file, you will also need to update 
 * the Docker image referenced in the `bin/php8` utility script (once a 
 * suitable update becomes available, that is).
 * 
 * Interestingly, this final syntax means attributes will be seen as
 * comments when executed via earlier PHP runtimes, reducing the 
 * potential for errors.
 * 
 * @see https://wiki.php.net/rfc/shorter_attribute_syntax_change
 * @see https://wiki.php.net/rfc/attribute_amendments
 * @see https://wiki.php.net/rfc/attributes_v2
 */

require __DIR__ . '/lib/utilities.php';
heading('Attributes ("Annotations")');
print 'This code is executing under PHP ' .PHP_VERSION . "\n";

// This first example demonstrates all of the places where attributes
// can be added.
heading('Example #1: Attribute Locations');

#[ClassAttr]
class Foo {
    #[ClassConstantAttr]
    const BAR = 123;

    #[CustomAttribute]
    #[CustomAttributeWithArguments("hello", "world")]
    public function baz() {
        // 💡 The following function is *not* a PHP built-in!
        dumpMethodAttributes($this, __FUNCTION__);
    }
}

(new Foo)->baz();

// Normally it is not possible to apply the same attribute
// to the same target more than once. This example shows how
// this constraint can be overcome.
heading('Example #2: Applying the Same Attribute Multiple Times');

#[Attribute(Attribute::IS_REPEATABLE)]
class HttpRequestPath {}

class Bar {
    #[HttpRequestPath('/bar')]
    #[HttpRequestPath('/bar:id')]
    public function controller() {
        // 💡 The following function is *not* a PHP built-in!
        dumpMethodAttributes($this, __FUNCTION__);
    }
}

(new Bar)->controller();
