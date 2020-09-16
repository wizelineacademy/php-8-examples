<?php

/**
 * @httpMethod POST
 * @httpPath   blog/:id
 */
#[httpMethod('POST')]
#[httpPath('blog/:id')]
function updateBlogPost($id, $data) {
    // does some work!
}

$attributes = (new ReflectionFunction('updateBlogPost'))->getAttributes();

foreach ($attributes as $attr) {
    print $attr->getName() . "\n";
}
