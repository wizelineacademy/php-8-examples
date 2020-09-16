<?php

$animal = 'Eagle';

switch ($animal) {
    // Mammals
    case 'Cow':
    case 'Dog':
        $class = 'Mammal';
    break;

    // Birds
    case 'Eagle':
    case 'Parrot':
        $class = 'Bird';
        
    // Reptiles
    case 'Lizard':
    case 'Snake':
        $class = 'Reptile';
    break;

    // Unknown
    default:
        $class = 'Unknown Class of Animal';
    break;
}

print "{$animal}s are a type of {$class}";

