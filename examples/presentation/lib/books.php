<?php
class Book {
    private string $name;
    private int $length;

    public function __construct(string $name, int $length) {
        $this->name = $name;
        $this->length = $length;
    }

    public function __get($key) {
        return $this->$key ?? null;
    }
}

function getBookList(): array {
    static $bookList = [];

    if (! empty($bookList)) {
        return $bookList;
    }

    # Now let's build a list of books (we need a sizeable data source, because
    # the problem with unstable sorts can't generally be seen with small arrays).
    $booksSrc = fopen(__DIR__ . '/../data/books.csv', 'r');
    $headerRow = true;

    while (($data = fgetcsv($booksSrc)) !== false) {
        if ($headerRow) {
            $headerRow = false;
            continue;
        }

        $bookList[] = new Book($data[0], $data[1]);
    }

    return $bookList;
}