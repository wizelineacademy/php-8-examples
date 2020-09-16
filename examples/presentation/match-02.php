<?php

$animal = 'Eagle';

$class = match ($animal) {
    'Cow', 'Dog'      => 'Mammal',
    'Eagle', 'Parrot' => 'Bird',
    'Lizard', 'Snake' => 'Reptile',
    default           => 'Unknown Class of Animal',
};

print "{$animal}s are a type of {$class}";

