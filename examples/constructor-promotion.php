<?php
/**
 * Constructor Promotion Examples.
 * 
 * To run: `bin/php8 examples/constructor-promotion.php`
 * 
 * @see https://wiki.php.net/rfc/constructor_promotion
 */

require __DIR__ . '/lib/utilities.php';
heading('Constructor Promotion');
print 'This code is executing under PHP ' .PHP_VERSION . "\n";

// In this example we don't do anything complex. All of the 
// constructor parameters are optional and they are all promoted
// to private fields.
heading('Example #1: Simple Constructor Promotion');

class TextDocument {
    public function __construct(
        private string $title = 'Untitled',
        private string $content = '',
        private string $format = 'txt',
        private string $encoding = 'UTF-8',
    ) {}
}

$textDoc = new TextDocument;
var_dump($textDoc);

// In this example we mix promoted and unpromoted constructor
// parameters. We also use this to see that promotion happens
// *before* code in the constructor body executes.
heading('Example #2: Promoted and Unpromoted Params');

class RichTextDocument {
    private string $id;

    public function __construct(
        private string $title = 'Untitled',
        private string $content = '',
        private string $format = 'txt',
        private string $encoding = 'UTF-8',
        string $id = '',
    ) {
        if (empty($id)) {
            // This line could be shortened (we could drop the use of
            // $this) however doing it this way demonstrates that
            // promotion to properties has already happened.
            $id = "{$this->title}//{$this->format}//{$this->encoding}}";        
        }

        $this->id = $id;
    }
}

$richTextDoc = new RichTextDocument;
var_dump($richTextDoc);
