Hello, PHP 8.0!
===============

PHP 8.0 is coming soon! This repository contains examples of various new features for you to experiment with. It also includes some helper scripts to make it easier to run examples using either PHP 7 or PHP 8 (this relies on Docker, which must be installed on your machine).

### Running Scripts via Docker

So long as you have installed Docker, you should be able to run scripts using either PHP 7 or PHP 8 as follows (assumes you are in the project root):

```sh
bin/php8 examples/test.php
```

You can also specify `bin/php7` though, of course, many examples that rely on the latest features from PHP 8 will not run successfully if you do this (but it could still be useful if you want to run some comparisons of your own).

_Note that the first time you run `bin/php7` or `bin/php8` there may be some "noise" while Docker pulls down the latest image layers, etc. On subsequent runs this generally will not happen._

### Useful Online Resources

You may find the following links useful when researching changes in PHP 8 (these are all third party resources, and are not controlled by us):

* [PHP 8.0 Schedule](https://wiki.php.net/todo/php80)
* [PHP 8.0 RFCs](https://wiki.php.net/rfc#php_80)
* [Guide to PHP 8](https://kinsta.com/blog/php-8/) (blog post by Kinsta)

Have fun!
