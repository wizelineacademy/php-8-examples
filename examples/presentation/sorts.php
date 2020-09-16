<?php
require __DIR__ . '/lib/books.php';

# Let's grab an array of books about programming.
#
# Expected structure:
#
#     [
#         { name: 'Using Perl 6', length: 202 },
#         { name: 'AppleScript',  length: 100 },
#         { name: 'Delphi Pro',   length: 187 },
#         ...
#     ]
$books = getBookList();

# Let's sort our booklist by page count:
# books with the least number of pages first.
usort($books, function($bookA, $bookB) {
    if ($bookA->length > $bookB->length) {
        return 1;
    }
    elseif ($bookA->length < $bookB->length) {
        return -1;
    }

    return 0;
});

# Let's inspect the newly ordered list
foreach ($books as $book) {
    print "$book->length\t{$book->name}\n";
}
