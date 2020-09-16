<?php
require __DIR__ . '/lib/employee.php';

$employeeID = 123;
$daysRemaining = getEmployee($employeeID)   // Can return either an Employee *or* null
    ->getVacationReport()  // Can return either a VacationReport *or* null
    ->getDaysRemaining();  // Can return either an int *or* null

if ($daysRemaining !== null) {
    print "Employee has $daysRemaining days of vacation remaining";
}
else {
    print "Could not determine how many days of vacation are left";
}

