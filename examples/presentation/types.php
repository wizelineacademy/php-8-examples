<?php

/**
 * Generates a happy birthday message to one of the team!
 */
function getBirthdayMessage(string $name, int|float|string $age): false|string {
    if ($age < 1 || empty($name)) {
        return false;
    }
 
    $message = "Happy birthday, {$name} - you are {$age}.";

    if (is_numeric($age)) {
        $remaining = 100 - $age;
        $message .= "\nJust {$remaining} years until you are 100!";
    }

    return $message;
}

print getBirthdayMessage('Jimmy', [45.0]);

