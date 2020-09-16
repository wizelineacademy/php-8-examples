<?php
require __DIR__ . '/lib/employee.php';

$employeeID = 456;
$daysRemaining = getEmployee($employeeID)?->getVacationReport()?->getDaysRemaining();

if (! empty($daysRemaining)) {
    print "Employee has $daysRemaining days of vacation remaining";
}
else {
    print "Could not determine how many days of vacation are left";
}

