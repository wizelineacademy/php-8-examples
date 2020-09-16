<?php

$haystack = "There are only two things in computer science that are hard. 
    Naming things, cache invalidation and off-by-one errors.";


var_dump(
    str_starts_with($haystack, 'There')
);

var_dump(
    str_ends_with($haystack, 'errors.')
);

var_dump(
    str_contains($haystack, 'cache')
);
