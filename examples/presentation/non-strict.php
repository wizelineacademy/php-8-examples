<?php
# Non-strict comparison changes (when comparing strings and numbers).

# Is (int) 0 equal to a non-empty string?
#
# PHP 7: true
# PHP 8: false
var_dump(0 == 'Good day to you');

# Is (int) 123 equal to a badly formed numeric string that starts
# with '123'?
#
# PHP 7: true
# PHP 8: false
var_dump(123 == '123 and away we go');

# Is (int) 0 equal to an empty string?
#
# PHP 7: true
# PHP 8: false
var_dump(0 == '');
