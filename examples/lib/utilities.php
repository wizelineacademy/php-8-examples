<?php
/**
 * Utility functions.
 * 
 * Do not execute this file directly (if you do, nothing will happen).
 * It exists only to provide helper functions to the actual example
 * scripts.
 */

/**
 * Outputs a heading.
 * 
 * @param string $title 
 * @return void 
 */
function heading(string $title): void {
    static $calls = 0;

    // The first heading should be H1 style
    $symbol = ++$calls === 1 ? '=' : '-';

    $underline = str_repeat($symbol, strlen($title));
    print "\n{$title}\n{$underline}\n\n";
}

/**
 * Given a class/object and method, attempts to discover
 * and prints details of any attributes.
 * 
 * @param mixed $class 
 * @param mixed $methodName 
 * 
 * @return void 
 */
function dumpMethodAttributes($class, $methodName): void {
    // We don't use $obj::class here because this lib may be executed using PHP 7.
    $className = is_string($class)
        ? $class
        : (new ReflectionClass($class))->getName();

    $method = new ReflectionMethod($class, $methodName);

    if (! method_exists($method, 'getAttributes')) {
        print "[error] Unable to inspect attributes. Are you using PHP 8?\n";
        return;
    }

    print "Attributes for {$className}::{$methodName}():\n\n";

    $attributes = $method->getAttributes();

    foreach ($attributes as $attribute) {
        $args = implode( ', ', $attribute->getArguments());
        print "\t- " . $attribute->getName() . " $args\n";
    }

    if (empty($attributes)) {
        print "\t - No attributes found\n";
    }
}
