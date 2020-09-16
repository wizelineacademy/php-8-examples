<?php
/**
 * Weak Map Examples.
 * 
 * To run: `bin/php8 examples/weak-maps.php`
 * 
 * @see https://wiki.php.net/rfc/weak_maps
 */

require __DIR__ . '/lib/utilities.php';
heading('Weak Maps');
print 'This code is executing under PHP ' .PHP_VERSION . "\n";

$game = new Weakmap;

$spaceInvader1 = new stdClass;
$spaceInvader1->name = 'Zorg';

$spaceInvader2 = new stdClass;
$spaceInvader2->name = 'Gargon';

$spaceInvader3 = new stdClass;
$spaceInvader3->name = 'Blorg';

$spaceInvaderMetaTemplate = [
    'moves' => 0,
    'hits'  => 0,
    'color' => 'green',
];

// Give each space invader some meta data.
$game[$spaceInvader1] = $spaceInvaderMetaTemplate;
$game[$spaceInvader2] = $spaceInvaderMetaTemplate;
$game[$spaceInvader3] = $spaceInvaderMetaTemplate;

// Customize the meta data a little.
$game[$spaceInvader2]['color'] = 'blue';
$game[$spaceInvader2]['color'] = 'purple';

// Let's confirm our map contains all 3 space invader objects
// and the associated meta data.
heading('Weak Map should contain 3 objects');
var_dump($game);

// Now let's destroy two of the space invaders. Important to
// note: we are not directly modifying the $game map.
unset($spaceInvader1, $spaceInvader3);

// Let's confirm that the map dropped references to space invaders
// #1 and #3 after they were destroyed (ie, it should now contain
// just one object - "Gargon").
heading('Weak Map should contain just 1 object');
var_dump($game);
